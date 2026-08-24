<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslationController extends Controller
{
    public function translate(Request $request)
    {
        try {
            $request->validate([
                'message' => 'required|string|max:500',
                'language' => 'required|string',
                'relationship' => 'required|string',
                'tone' => 'required|string',
            ]);

            $message = $request->message;
            $language = $request->language;
            $relationship = $request->relationship;
            $tone = $request->tone;

            $prompt = "
You are LingoAI, an AI translation assistant.

Translate the user's message into the requested target language.

Target language:
{$language}

Relationship with the person receiving the message:
{$relationship}

Desired tone:
{$tone}

Important instructions:
- Preserve the original meaning of the message.
- Make the translation sound natural to a native speaker.
- Adapt the wording appropriately to the requested relationship and tone.
- Do not explain the translation.
- Do not add quotation marks.
- Return only the translated message.

User's message:
{$message}
";

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post(
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-3.6-flash:generateContent?key=' . env('GEMINI_API_KEY'),
                [
                    'contents' => [
                        [
                            'parts' => [
                                [
                                    'text' => $prompt
                                ]
                            ]
                        ]
                    ]
                ]
            );

            if ($response->failed()) {
                return response()->json([
                    'success' => false,
                    'error' => $response->body(),
                ], 500);
            }

            $data = $response->json();

            $translatedText =
                $data['candidates'][0]['content']['parts'][0]['text']
                ?? null;

            if (!$translatedText) {
                return response()->json([
                    'success' => false,
                    'error' => 'Gemini returned an empty response.',
                ], 500);
            }

            return response()->json([
                'success' => true,
                'message' => trim($translatedText),
            ]);

        } catch (\Throwable $e) {

            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}