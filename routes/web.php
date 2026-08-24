<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TranslationController;

Route::get('/', function () {
return view('lingoai');
});
Route::post('/translate', [TranslationController::class, 'translate']);
