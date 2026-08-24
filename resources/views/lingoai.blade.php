<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LingoAI</title>

<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

:root {
--bg: #020817;
--panel: rgba(7, 18, 43, 0.72);
--panel-light: rgba(14, 28, 58, 0.7);
--border: rgba(80, 128, 210, 0.22);
--blue: #1699ff;
--blue-light: #39bfff;
--purple: #8b32ff;
--pink: #c33cff;
--text: #f5f7ff;
--muted: #8d98b4;
}

body {
min-height: 100vh;
background:
radial-gradient(
circle at 48% 25%,
rgba(24, 77, 170, 0.12),
transparent 32%
),
radial-gradient(
circle at 82% 40%,
rgba(123, 35, 255, 0.08),
transparent 30%
),
#020817;

color: var(--text);
font-family: Arial, Helvetica, sans-serif;
overflow-x: hidden;
}

/* =========================================
MAIN APP
========================================= */

.app {
min-height: 100vh;
display: flex;
position: relative;
}

/* =========================================
SIDEBAR
========================================= */

.sidebar {
width: 265px;
min-height: 100vh;
padding: 30px 14px 20px;

border-right: 1px solid rgba(78, 118, 190, 0.13);

background:
linear-gradient(
180deg,
rgba(4, 14, 34, 0.92),
rgba(2, 8, 23, 0.95)
);

display: flex;
flex-direction: column;

position: fixed;
left: 0;
top: 0;
bottom: 0;

z-index: 20;
}

/* =========================================
LOGO
========================================= */

.logo {
display: flex;
align-items: center;
gap: 13px;

padding: 0 14px;
margin-bottom: 42px;
}

.logo-icon {
width: 44px;
height: 44px;

border-radius: 13px;

background:
linear-gradient(
135deg,
#176bff,
#8328ff
);

display: flex;
align-items: center;
justify-content: center;

box-shadow:
0 0 25px rgba(82, 54, 255, 0.35);

position: relative;
}

.logo-icon::before {
content: "";
width: 20px;
height: 22px;

border: 2px solid white;
border-radius: 8px;

position: absolute;
}

.logo-icon::after {
content: "";

width: 3px;
height: 14px;

background: white;

box-shadow:
6px -4px 0 white,
-6px 2px 0 white;

border-radius: 3px;
}

.logo-text {
font-size: 25px;
font-weight: 700;
letter-spacing: -1px;
font-family:'Times New Roman', Times, serif;
}

.logo-text span {
color: #750d8f;
}

/* =========================================
SIDEBAR NAVIGATION
========================================= */

.nav {
display: flex;
flex-direction: column;
gap: 8px;
font-family: 'Times New Roman', Times, serif;
font-size: 20px;
}

.nav-item {
height: 48px;
display: flex;
align-items: center;
gap: 15px;
padding: 0 16px;
color: #aab4cc;
text-decoration: none;
border-radius: 11px;
font-size: 15px;
transition: 0.25s ease;
}

.nav-item:hover {
color: white;
background: rgba(31, 62, 125, 0.25);
}

.nav-item.active:hover {
color: white;
background: rgba(31, 62, 125, 0.25);
}

.nav-item.active {
height: 48px;
display: flex;
align-items: center;
gap: 15px;
padding: 0 16px;
color: #aab4cc;
text-decoration: none;
border-radius: 11px;
font-size: 15px;
transition: 0.25s ease;
}

.nav-icon {
width: 22px;
height: 22px;

display: flex;
align-items: center;
justify-content: center;

font-size: 20px;
}

/* =========================================
SIDEBAR PRO CARD
========================================= */

.pro-card {
margin-top: auto;

padding: 20px 16px;
border-radius: 14px;

background:
linear-gradient(
145deg,
rgba(17, 31, 66, 0.88),
rgba(7, 16, 37, 0.9)
);

border: 1px solid rgba(76, 114, 182, 0.2);
}

.pro-card h4 {
font-size: 15px;
margin-bottom: 10px;
}

.pro-card p {
color: #8e9bb8;
font-size: 12px;
line-height: 1.55;
margin-bottom: 18px;
}

.pro-btn {
width: 100%;
height: 40px;

border: none;
border-radius: 9px;

color: white;
font-weight: 600;

background:
linear-gradient(
90deg,
#148cff,
#932dff
);

cursor: pointer;
}

/* =========================================
MAIN CONTENT
========================================= */

.main {
margin-left: 265px;
width: calc(100% - 265px);

min-height: 100vh;

padding: 30px 38px 50px;

position: relative;
}

/* =========================================
TOP BAR
========================================= */

.topbar {
display: flex;
justify-content: flex-end;
align-items: center;

gap: 18px;

height: 30px;
}

.top-btn {
height: 48px;
min-width: 72px;

padding: 0 16px;

display: flex;
align-items: center;
justify-content: center;
gap: 8px;

border-radius: 13px;

border: 1px solid rgba(83, 116, 177, 0.25);

background: rgba(5, 14, 34, 0.65);

color: #cbd4e8;

font-size: 14px;

cursor: pointer;
}

.signin {
height: 48px;
padding: 0 28px;

border: none;
border-radius: 14px;

color: white;
font-size: 15px;
font-weight: 600;

background:
linear-gradient(
90deg,
#087ff3,
#ba31ed
);

box-shadow:
0 8px 25px rgba(74, 52, 255, 0.18);
}

/* =========================================
HERO
========================================= */

.hero {
text-align: center;

margin-top: 36px;

position: relative;
}

.hero h1 {
font-size: clamp(40px, 4vw, 45px);
font-family:'Times New Roman', Times, serif;
line-height:0.85;

letter-spacing: -2.8px;

font-weight: 700;

margin-bottom: 11px;
justify-content: left;
text-align: center;
margin-top: 5px;
}
.hero p{
font-family:'Times New Roman', Times, serif;
}

.hero h1 .blue {
color: #159eff;
}

.hero h1 .purple {
color: #9631f5;
}

.hero p {
font-size: 20px;

color: #e4e8f3;

line-height: 1.45;

max-width: 620px;

margin: auto;
}

/* =========================================
WAVEFORMS
========================================= */

.wave {
position: absolute;

width: 150px;
height: 60px;

display: flex;
align-items: center;
gap: 3px;

opacity: 0.8;
}

.wave-left {
left: 0;
top: 15px;
}

.wave-right {
right: 0;
top: 15px;
}

.wave span {
width: 2px;
border-radius: 3px;

background: #179dff;
}

.wave-right span {
background: #a32cff;
}

.wave span:nth-child(1) { height: 8px; }
.wave span:nth-child(2) { height: 16px; }
.wave span:nth-child(3) { height: 29px; }
.wave span:nth-child(4) { height: 40px; }
.wave span:nth-child(5) { height: 51px; }
.wave span:nth-child(6) { height: 33px; }
.wave span:nth-child(7) { height: 24px; }
.wave span:nth-child(8) { height: 48px; }
.wave span:nth-child(9) { height: 35px; }
.wave span:nth-child(10) { height: 18px; }
.wave span:nth-child(11) { height: 10px; }
.wave span:nth-child(12) { height: 6px; }

/* =========================================
CONTENT GRID
========================================= */

.content-grid {
display: grid;

grid-template-columns:
minmax(500px, 1fr)
380px;

gap: 24px;

max-width: 1230px;

margin: 38px auto 0;
}

/* =========================================
GENERAL CARD
========================================= */

.glass-card {
background:
linear-gradient(
145deg,
rgba(9, 22, 51, 0.72),
rgba(4, 12, 29, 0.78)
);

border: 1px solid rgba(67, 110, 177, 0.25);

border-radius: 20px;

box-shadow:
inset 0 1px 0 rgba(255, 255, 255, 0.025),
0 20px 50px rgba(0, 0, 0, 0.12);

backdrop-filter: blur(20px);
}

/* =========================================
TRANSLATION FORM
========================================= */

.translator-card {
padding: 20px;
}

.form-grid {
display: grid;

grid-template-columns: 1.5fr 0.8fr;

gap: 24px;
}

.section-title {
font-size: 14px;
font-weight: 600;

margin-bottom: 12px;

color: #edf1fa;
}

.message-box {
height: 275px;

position: relative;

border: 1px solid rgba(75, 111, 172, 0.25);

border-radius: 15px;

background:
rgba(5, 14, 33, 0.7);

overflow: hidden;
}

textarea {
width: 100%;
height: 100%;

padding: 20px;

resize: none;

outline: none;
border: none;

background: transparent;

color: #e9eef9;

font-family: inherit;

font-size: 15px;

line-height: 1.6;
}

textarea::placeholder {
color: #7d89a5;
}

.char-count {
position: absolute;

bottom: 17px;
left: 20px;

color: #78849e;

font-size: 11px;
}

.mic-input {
position: absolute;

right: 14px;
bottom: 12px;

width: 44px;
height: 44px;

border-radius: 11px;

border: 1px solid rgba(100, 128, 185, 0.2);

background: rgba(21, 34, 61, 0.8);

color: #d9e1f2;

cursor: pointer;

font-size: 19px;
}

/* =========================================
FORM SELECTS
========================================= */

.field {
margin-bottom: 17px;
}

.select-box {
height: 48px;

width: 100%;

padding: 0 14px;

border-radius: 11px;

background:
rgba(5, 14, 33, 0.72);

border: 1px solid rgba(76, 112, 174, 0.25);

color: #e4eaf8;

outline: none;

font-size: 14px;

cursor: pointer;
}

.select-box option {
background: #071226;
color: white;
}

/* =========================================
TRANSLATE BUTTON
========================================= */

.button-row {
grid-column: 1 / -1;

display: grid;

grid-template-columns: 1fr 0.4fr;

gap: 14px;

margin-top: -2px;
}

.translate-btn {
height: 56px;

border: none;

border-radius: 11px;

color: white;

font-size: 16px;

font-weight: 600;

cursor: pointer;

background:
linear-gradient(
90deg,
#1195f5,
#712cf2,
#a52ee8
);

box-shadow:
0 10px 30px rgba(65, 72, 255, 0.15);
}

.clear-btn {
height: 56px;

border-radius: 11px;

border: 1px solid rgba(71, 102, 157, 0.25);

background: rgba(8, 18, 39, 0.8);

color: #8793ae;

font-size: 15px;

cursor: pointer;
}

/* =========================================
INFO CARD
========================================= */

.info-card {
padding: 20px 22px;
}

.globe-container {
height: 230px;

display: flex;
align-items: center;
justify-content: center;

position: relative;

overflow: hidden;
}

.globe {
width: 180px;
height: 180px;

border-radius: 50%;

position: relative;

background:
radial-gradient(
circle at 35% 30%,
rgba(58, 172, 255, 0.8),
rgba(23, 71, 160, 0.45) 35%,
rgba(4, 16, 44, 0.9) 70%
);

border: 1px solid rgba(72, 159, 255, 0.75);

box-shadow:
0 0 45px rgba(31, 109, 255, 0.32),
inset 0 0 30px rgba(61, 153, 255, 0.15);

overflow: hidden;
}

.globe::before {
content: "";

position: absolute;

width: 100%;
height: 100%;

background:
repeating-linear-gradient(
90deg,
transparent 0,
transparent 19px,
rgba(84, 166, 255, 0.25) 20px,
transparent 21px
);

border-radius: 50%;

transform: scaleX(1.15);
}

.globe::after {
content: "";

position: absolute;

width: 100%;
height: 100%;

background:
repeating-linear-gradient(
0deg,
transparent 0,
transparent 20px,
rgba(84, 166, 255, 0.22) 21px,
transparent 22px
);

border-radius: 50%;
}

.continent {
position: absolute;

background: rgba(87, 181, 255, 0.3);

filter: blur(1px);

border-radius: 50%;
}

.continent.one {
width: 48px;
height: 85px;

left: 47px;
top: 42px;

transform: rotate(25deg);
}

.continent.two {
width: 32px;
height: 60px;

right: 43px;
top: 48px;

transform: rotate(-30deg);
}

.continent.three {
width: 38px;
height: 25px;

left: 70px;
bottom: 39px;
}

/* =========================================
LANGUAGE BUBBLES
========================================= */

.bubble {
position: absolute;

padding: 7px 13px;

border-radius: 9px;

font-size: 13px;

background:
linear-gradient(
135deg,
rgba(23, 116, 255, 0.9),
rgba(54, 73, 205, 0.8)
);

border: 1px solid rgba(93, 179, 255, 0.5);

box-shadow:
0 0 20px rgba(25, 115, 255, 0.15);
}

.bubble.one {
top: 12px;
right: 82px;
}

.bubble.two {
left: 16px;
top: 90px;

background:
linear-gradient(
135deg,
rgba(178, 38, 236, 0.85),
rgba(85, 39, 201, 0.75)
);
}

.bubble.three {
right: 8px;
top: 95px;
}

.bubble.four {
left: 30px;
bottom: 23px;

background:
linear-gradient(
135deg,
rgba(20, 113, 255, 0.85),
rgba(45, 74, 205, 0.8)
);
}

.bubble.five {
right: 45px;
bottom: 15px;

background:
linear-gradient(
135deg,
rgba(184, 41, 238, 0.85),
rgba(75, 46, 190, 0.8)
);
}

/* =========================================
INFO TEXT
========================================= */

.info-title {
color: #4bb8ff;

font-size: 18px;

font-weight: 600;

line-height: 1.35;

margin: 8px 0 20px;
}

.benefit {
display: flex;

align-items: center;

gap: 10px;

color: #9ca8c1;

font-size: 13px;

margin-bottom: 13px;
}

.check {
width: 18px;
height: 18px;

border-radius: 50%;

border: 1px solid #267cff;

color: #4db9ff;

display: flex;

align-items: center;
justify-content: center;

font-size: 10px;
}

/* =========================================
TRANSLATION RESULT
========================================= */

.result-card {
max-width: 1230px;

margin: 24px auto 0;

padding: 20px 24px;
}

.result-title {
font-size: 16px;

font-weight: 600;

margin-bottom: 14px;
margin-top:16px;
margin-left: 10px;
font-family: 'Times New Roman', Times, serif;
}

.result-box {
min-height: 150px;

border-radius: 14px;

background:
rgba(4, 13, 31, 0.7);

border: 1px solid rgba(68, 108, 172, 0.22);

padding: 22px;

position: relative;
}

.result-placeholder {
color: #79869f;

font-size: 15px;
}

.result-actions {
position: absolute;

left: 20px;
bottom: 18px;

display: flex;

gap: 9px;
}

.action-btn {
height: 38px;

padding: 0 15px;

display: flex;
align-items: center;

gap: 8px;

border-radius: 9px;

border: 1px solid rgba(74, 108, 166, 0.25);

background: rgba(10, 22, 45, 0.85);

color: #b5bfd1;

cursor: pointer;

font-size: 12px;
}

.audio-download {
position: absolute;

right: 18px;
bottom: 18px;

height: 38px;

padding: 0 16px;

border-radius: 9px;

border: 1px solid rgba(72, 108, 170, 0.25);

background: rgba(10, 22, 45, 0.85);

color: #aeb9cf;

cursor: pointer;

font-size: 12px;
}

/* =========================================
BOTTOM WAVE + MIC
========================================= */

.audio-visual {
position: absolute;

right: 70px;

bottom: 14px;

height: 75px;

display: flex;

align-items: center;

gap: 5px;
}

.audio-bars {
display: flex;

align-items: center;

gap: 3px;

height: 60px;
}

.audio-bars span {
width: 2px;

border-radius: 3px;

background:
linear-gradient(
180deg,
#13b9ff,
#713aff
);
}

.audio-bars span:nth-child(1) { height: 12px; }
.audio-bars span:nth-child(2) { height: 23px; }
.audio-bars span:nth-child(3) { height: 36px; }
.audio-bars span:nth-child(4) { height: 48px; }
.audio-bars span:nth-child(5) { height: 31px; }
.audio-bars span:nth-child(6) { height: 21px; }
.audio-bars span:nth-child(7) { height: 13px; }

.mic-circle {
width: 90px;
height: 90px;

border-radius: 50%;

display: flex;
align-items: center;
justify-content: center;

border: 1px solid rgba(73, 153, 255, 0.65);

background:
radial-gradient(
circle,
rgba(46, 74, 190, 0.5),
rgba(8, 19, 48, 0.75)
);

box-shadow:
0 0 35px rgba(44, 109, 255, 0.2);
}

.mic-symbol {
width: 26px;
height: 36px;

border: 3px solid #8f7cff;

border-radius: 16px;

position: relative;
}

.mic-symbol::before {
content: "";

position: absolute;

width: 38px;
height: 24px;

border-bottom: 3px solid #6e9fff;

border-radius: 0 0 25px 25px;

left: 50%;
bottom: -14px;

transform: translateX(-50%);
}

.mic-symbol::after {
content: "";

position: absolute;

width: 3px;
height: 9px;

background: #6e9fff;

left: 50%;
bottom: -23px;

transform: translateX(-50%);
}

/* =========================================
QUOTE
========================================= */

.quote {
max-width: 850px;

margin: 24px auto 0;

min-height: 66px;

display: flex;

align-items: center;
justify-content: center;

text-align: center;

padding: 15px 30px;

border-radius: 16px;

border: 1px solid rgba(70, 106, 164, 0.2);

background:
rgba(7, 17, 38, 0.5);

color: #8995b0;

font-size: 14px;
}

.quote-mark {
color: #646de9;

font-size: 28px;

margin-right: 10px;
}

.quote-author {
color: #636de4;

margin-left: 5px;
}

/* =========================================
RESPONSIVE
========================================= */

@media (max-width: 1100px) {

.content-grid {
grid-template-columns: 1fr;
}

.info-card {
display: none;
}

.wave {
display: none;
}
}

@media (max-width: 800px) {

.sidebar {
display: none;
}

.main {
margin-left: 0;
width: 100%;
padding: 20px;
}

.hero h1 {
font-size:12px;
}

.hero p {
font-size: 16px;
}

.form-grid {
grid-template-columns: 1fr;
}

.button-row {
grid-template-columns: 1fr;
}

.result-card {
padding: 16px;
}

.audio-visual {
display: none;
}
}

@media (max-width: 500px) {

.topbar {
gap: 8px;
}

.top-btn {
min-width: 45px;
padding: 0 10px;
}

.signin {
padding: 0 15px;
}

.hero {
margin-top: 25px;
}

.hero h1 {
font-size: 34px;
letter-spacing: -1.5px;
}

.translator-card {
padding: 14px;
}
}
/* =========================================
HISTORY
========================================= */

.history-card {
max-width: 1230px;
margin: 24px auto 0;
padding: 22px 24px;
display: none;
}

.history-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 20px;
}

.history-subtitle {
color: #7f8ba5;
font-size: 13px;
margin-top: -8px;
}

.clear-history-btn {
height: 38px;
padding: 0 15px;
border-radius: 9px;
border: 1px solid rgba(74, 108, 166, 0.25);
background: rgba(10, 22, 45, 0.85);
color: #b5bfd1;
cursor: pointer;
font-size: 12px;
}

.clear-history-btn:hover {
background: rgba(40, 55, 90, 0.85);
}

.history-item {
padding: 18px;
margin-bottom: 12px;

border-radius: 13px;

background: rgba(5, 14, 33, 0.7);

border: 1px solid rgba(68, 108, 172, 0.22);
}

.history-language {
color: #4bb8ff;
font-size: 12px;
margin-bottom: 8px;
}

.history-original {
color: #8d98b4;
font-size: 13px;
margin-bottom: 8px;
}

.history-translation {
color: #f5f7ff;
font-size: 15px;
line-height: 1.5;
}

.history-time {
color: #68748d;
font-size: 11px;
margin-top: 12px;
}

.history-empty {
color: #79869f;
text-align: center;
padding: 35px 10px;
font-size: 14px;
}

/* =========================================
FAVORITES
========================================= */

.favorites-card {
max-width: 1230px;
margin: 24px auto 0;
padding: 22px 24px;
display: none;
}

.favorites-header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 20px;
}

.clear-favorites-btn {
height: 38px;
padding: 0 15px;
border-radius: 9px;

border: 1px solid rgba(74, 108, 166, 0.25);

background: rgba(10, 22, 45, 0.85);

color: #b5bfd1;

cursor: pointer;

font-size: 12px;
}

.favorite-item {
padding: 18px;
margin-bottom: 12px;

border-radius: 13px;

background: rgba(5, 14, 33, 0.7);

border: 1px solid rgba(68, 108, 172, 0.22);

position: relative;
}

.favorite-language {
color: #4bb8ff;
font-size: 12px;
margin-bottom: 8px;
}

.favorite-original {
color: #8d98b4;
font-size: 13px;
margin-bottom: 8px;
}

.favorite-translation {
color: #f5f7ff;
font-size: 15px;
line-height: 1.5;
}

.favorite-time {
color: #68748d;
font-size: 11px;
margin-top: 12px;
}

.remove-favorite-btn {
position: absolute;

right: 15px;
top: 15px;

border: none;

background: transparent;

color: #ff6b9d;

font-size: 18px;

cursor: pointer;
}

.favorites-empty {
color: #79869f;

text-align: center;

padding: 35px 10px;

font-size: 14px;
}

.languages-card {
max-width: 1230px;
margin: 24px auto;
padding: 24px;
}

.languages-description {
color: #8d98b4;
font-size: 14px;
margin-bottom: 24px;
}

.languages-list {
display: grid;
grid-template-columns: repeat(2, 1fr);
gap: 14px;
}

.language-item {
height: 60px;
display: flex;
align-items: center;
gap: 14px;
padding: 0 18px;

border-radius: 12px;

background: rgba(8, 18, 39, 0.75);
border: 1px solid rgba(71, 108, 166, 0.22);

color: #dce4f5;
font-size: 14px;
}

.language-item span:first-child {
font-size: 22px;
}

@media (max-width: 600px) {
.languages-list {
grid-template-columns: 1fr;
}
}
/* ========================================
SETTINGS
========================================= */

.settings-card {
max-width: 1230px;
margin: 24px auto;
padding: 24px;
}

.settings-description {
color: #8d98b4;
font-size: 14px;
margin-bottom: 25px;
}


/* ========================================
SETTING ITEM
========================================= */

.setting-item {
min-height: 75px;

display: flex;
align-items: center;
justify-content: space-between;

padding: 18px 20px;
margin-bottom: 12px;

border-radius: 13px;

background: rgba(8, 18, 39, 0.75);

border: 1px solid rgba(71, 108, 166, 0.22);

transition: 0.25s ease;
}

.setting-item:hover {
border-color: rgba(54, 123, 255, 0.4);

background: rgba(12, 25, 52, 0.85);
}


/* ========================================
SETTING INFORMATION
========================================= */

.setting-info {
flex: 1;
padding-right: 20px;
}

.setting-info h4 {
color: #e7edf9;

font-size: 15px;

margin-bottom: 6px;
}

.setting-info p {
color: #7f8ba5;

font-size: 12px;

line-height: 1.6;

margin: 0;
}


/* ========================================
SETTINGS SELECT
========================================= */

.settings-select {
width: 130px;

height: 42px;

padding: 0 12px;

border-radius: 9px;

background: #071226;

border: 1px solid rgba(76, 112, 174, 0.25);

color: #e4eaf8;

outline: none;

font-size: 13px;

cursor: pointer;
}

.settings-select:focus {
border-color: rgba(54, 123, 255, 0.6);
}

.settings-select option {
background: #071226;

color: white;
}


/* ========================================
MOBILE
========================================= */

@media (max-width: 600px) {

.settings-card {
padding: 16px;
}

.setting-item {
align-items: flex-start;

flex-direction: column;

gap: 14px;
}

.setting-info {
padding-right: 0;
}

.settings-select {
width: 100%;
}
}
/* ========================================
LIGHT MODE
========================================= */

body.light-mode {
background: #f4f7fc;
color:black;
}

.section-title {
font-size: 14px;
font-weight: 600;

margin-bottom: 12px;

color:grey;
}
/* SIDEBAR */

body.light-mode .sidebar {
background:
linear-gradient(
180deg,
#ffffff,
#f1f5fb
);

border-right: 1px solid #dce3ef;
}


/* LOGO */

body.light-mode .logo-text {
color:black;
}


/* NAVIGATION */

body.light-mode .nav-item {
color:black;
}

body.light-mode .nav-item:hover {
color:black;
background: rgba(31, 62, 125, 0.08);
}

body.light-mode .nav-item.active {
color:black;

background:
linear-gradient(
90deg,
rgba(24, 72, 187, 0.12),
rgba(53, 45, 160, 0.08)
);

border-color: rgba(54, 123, 255, 0.2);
}


/* PRO CARD */

body.light-mode .pro-card {
background:
linear-gradient(
145deg,
#ffffff,
#edf2fa
);

border-color: #dce3ef;
}

body.light-mode .pro-card h4 {
color:black;
}

body.light-mode .pro-card p {
color: black;
}


/* MAIN */

body.light-mode .main {
background: #f4f7fc;
color:black
}


/* GLASS CARDS */

body.light-mode .glass-card {
background:
linear-gradient(
145deg,
#ffffff,
#f8faff
);

border-color: #dce3ef;

box-shadow:
0 15px 40px rgba(20, 40, 80, 0.08);
}


/* HERO */

body.light-mode .hero p {
color: #4f5d73;
}


/* MESSAGE BOX */

body.light-mode .message-box {
background: #ffffff;
border-color: #d8e0ed;
}

body.light-mode textarea {
color:black;
}

body.light-mode textarea::placeholder {
color:black;
}


/* SELECT BOXES */

body.light-mode .select-box,
body.light-mode .settings-select {
background: #ffffff;
color:black;
border-color: #d8e0ed;
}

body.light-mode .select-box option,
body.light-mode .settings-select option {
background: #ffffff;
color:black;
}


/* RESULT */

body.light-mode .result-box {
background: #ffffff;
border-color: #d8e0ed;
}

body.light-mode .result-placeholder {
color:black;
}
/* ACTION BUTTONS */
body.light-mode .action-btn,
body.light-mode .audio-download {
background: #f5f7fb;
color: black;
border-color: #d8e0ed;
}

/* SETTINGS */

body.light-mode .settings-description {
color: gray;
}

body.light-mode .setting-item {
background: #ffffff;
border-color: #d8e0ed;
}

body.light-mode .setting-item:hover {
background: #f8faff;
border-color: #b9cceb;
}

body.light-mode .setting-info h4 {
color:black;
}

body.light-mode .setting-info p {
color: gray;
}


/* LANGUAGES */

body.light-mode .language-item {
background: #ffffff;
border-color: #d8e0ed;
}


/* HISTORY */

body.light-mode .history-item {
background: #ffffff;
border-color: #d8e0ed;
}

body.light-mode .history-original,
body.light-mode .history-translation {
color:gray;
}
body.light-mode .history-time,
body.light-mode .history-empty {
color: gray;
}
.language-item{
color:gray;
}
/* QUOTE */
body.light-mode .quote {
background: rgba(255, 255, 255, 0.8);
border-color: #d8e0ed;
color:gray;
}
/* ========================================
CLEAR SAVED PHRASES BUTTON
======================================== */

.clear-saved-btn {
height: 38px;
padding: 0 20px;
border-radius: 9px;
border: 1px solid rgba(74, 108, 166, 0.25);
background: rgba(10, 22, 45, 0.85);
color: #b5bfd1;
cursor: pointer;
font-size: 12px;
width: 19%;
margin-right: 16px;
margin-top: 10px;
}

.clear-saved-btn:hover {
background: rgba(180, 35, 45, 0.25);
color: white;
border-color: rgba(255, 90, 90, 0.45);
}

.saved-header {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 20px;
}
</style>
</head>
<body>
<div class="app">
<!-- =========================================
SIDEBAR
========================================== -->
<aside class="sidebar">
<div class="logo">
<div class="logo-text">
Lingo<span>AI</span>
</div>
</div>
<nav class="nav">
<a href="#translate" class="nav-item active" id="translateNav">
<span class="nav-icon">⌂</span>
<span>Translate</span>
</a>

<a href="#" class="nav-item">
<span class="nav-icon">♩</span>
<span>Voice Translate</span>
</a>
<a href="#history" class="nav-item" id="historyNav">
<span class="nav-icon">◷</span>
<span>History</span>
</a>
<a
href="#favorites"
class="nav-item"
id="favoritesNav"
>
<span class="nav-icon">♡</span>
<span>Favorites</span>
</a>
<a href="#" class="nav-item"id="savedPhrasesNav">
<span class="nav-icon">▢</span>
<span>Saved Phrases</span>
</a>

<a href="#" class="nav-item"id="languagesNav">
<span class="nav-icon">◎</span>
<span>Languages</span>
</a>

<a href="#" class="nav-item" id="settingsNav">
<span class="nav-icon">⚙</span>
<span>Settings</span>
</a>

</nav>


<div class="pro-card">

<h4>
Upgrade to Pro
</h4>

<p>
Unlock unlimited translations,
voice cloning, file translation
and more.
</p>
<button class="pro-btn">
Upgrade Now
</button>
</div>
</aside>
<!-- =========================================
MAIN
========================================== -->
<main class="main">
<!-- HERO -->
<section class="hero">
<div class="wave wave-left">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>


<div class="wave wave-right">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>


<h1>
Speak
<span class="blue">Freely.</span>
Connect
<span class="purple">Deeply.</span>
</h1>

<p>
AI-Powered translation that understands context,
tone, and your world.
</p>

</section>
<!-- =========================================
TRANSLATOR + INFO
========================================== -->
<section class="content-grid" id="translate">
<!-- TRANSLATOR -->
<div class="glass-card translator-card">
<div class="form-grid">


<!-- MESSAGE -->

<div>

<div class="section-title">
1. What do you want to say?
</div>

<div class="message-box">

<textarea
id="message"
maxlength="500"
placeholder="Type your message here..."
></textarea>

<div class="char-count">
0 / 500
</div>

<button class="mic-input">
♫
</button>

</div>

</div>


<!-- OPTIONS -->

<div>

<div class="field">

<div class="section-title">
2. Translate to
</div>

<select class="select-box" id="language">
<option>🇬🇧 English</option>
<option>🇫🇷 French</option>
<option>🇪🇸 Spanish</option>
<option>🇩🇪 German</option>
<option>🇸🇦 Arabic</option>
<option>🇯🇵 Japanese</option>
<option>🇨🇳 Chinese</option>

</select>

</div>


<div class="field">

<div class="section-title">
3. Who are you talking to?
</div>
<select class="select-box" id="relationship">
<option>♙ Friend</option>
<option>♙ Family</option>
<option>♙ Lecturer</option>
<option>♙ Employer</option>
<option>♙ Customer</option>
<option>♙ Stranger</option>

</select>

</div>


<div class="field">

<div class="section-title">
4. How should you sound?
</div>
<select class="select-box" id="tone">
<option>☺ Friendly</option>
<option>Casual</option>
<option>Respectful</option>
<option>Professional</option>
<option>Serious</option>
<option>Apologetic</option>
</select>
</div>
</div>


<!-- BUTTONS -->

<div class="button-row">

<button class="translate-btn" id="translateBtn">
&nbsp; Translate with LingoAI
</button>

<button class="clear-btn">
⟳ &nbsp; Clear
</button>
</div>
</div>
</div>
<!-- INFO -->
<div class="glass-card info-card">
<div class="globe-container">
<div class="bubble one">
Hello!
</div>
<div class="bubble two">
Bonjour!
</div>
<div class="bubble three">
¡Hola!
</div>
<div class="bubble four">
!مرحبا
</div>
<div class="bubble five">
Én le!
</div>
<div class="globe">
<div class="continent one"></div>
<div class="continent two"></div>
<div class="continent three"></div>
</div>
</div>
<div class="info-title">
Breaking language barriers<br>
with the power of AI
</div>
<div class="benefit">
<span class="check">✓</span>
<span>
Understands context & relationship
</span>
</div>
<div class="benefit">
<span class="check">✓</span>
<span>
Adapts tone to your needs
</span>
</div>
<div class="benefit">
<span class="check">✓</span>
<span>
Natural & accurate translations
</span>
</div>
</div>
</section>
<!-- =========================================
RESULT
========================================== -->
<section class="glass-card result-card">
<div class="result-title">
Translation
</div>
<div class="result-box">
<div class="result-placeholder" id="translationResult">
Your translated message will appear here...
</div>
<div class="result-actions"> 
<button class="action-btn" id="listenBtn"> 
&nbsp; Listen 
</button> 

<button class="action-btn" id="copyBtn" type="button"> 
&nbsp; Copy 
</button> 

<button class="action-btn" id="saveBtn"> 
&nbsp; Save 
</button> 
</div>
<div class="audio-visual">
<div class="audio-bars">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
<div class="mic-circle">
<div class="mic-symbol"></div>
</div>
<div class="audio-bars">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</section>
<!-- =========================================
QUOTE
========================================== -->
<!-- =========================================
HISTORY
========================================== -->

<section class="glass-card history-card" id="history">
<div class="history-header">
<div>
<div class="result-title">Translation History</div>
<p class="history-subtitle">
Your recent translations
</p>
</div>
<button class="clear-history-btn" id="clearHistoryBtn" type="button">
Clear History
</button>
</div>
<div id="historyList">
<div class="history-empty">
No translation history yet.
</div>
</div>
</section>
<br>
<br>
<!-- ========================================
SAVED PHRASES
========================================= -->

<section class="glass-card saved-phrases-card" id="savedPhrases" style="display: none;">

<div class="saved-header">

    <div class="result-title">
        Saved Phrases
    </div>

    <button id="clearSavedBtn" class="clear-saved-btn">
        Clear Saved Phrases
    </button>

</div>

<div id="savedPhrasesList">

    <div class="history-empty">
        No saved phrases yet.
    </div>

</div>
</section>
<!-- =========================================
FAVORITES
========================================= -->
<section class="glass-card favorites-card" id="favorites">
<div class="favorites-header">
<div>
<div class="result-title">
Favorite Translations
</div>
<p class="history-subtitle">
Your favorite translations
</p>
</div>
<button
class="clear-favorites-btn"
id="clearFavoritesBtn"
type="button"
>
Clear Favorites
</button>
</div>
<div id="favoritesList">
<div class="favorites-empty">
No favorite translations yet.
</div>
</div>
</section>
<!-- ========================================
LANGUAGES
========================================= -->
<section class="glass-card languages-card" id="languages" style="display: none;">
<div class="result-title">
Supported Languages
</div>
<p class="languages-description">
LingoAI currently supports the following languages for translation:
</p>
<div class="languages-list">
<div class="language-item">
<span>🇬🇧</span>
<span>English</span>
</div>
<div class="language-item">
<span>🇫🇷</span>
<span>French</span>
</div>
<div class="language-item">
<span>🇪🇸</span>
<span>Spanish</span>
</div>
<div class="language-item">
<span>🇩🇪</span>
<span>German</span>
</div>
<div class="language-item">
<span>🇸🇦</span>
<span>Arabic</span>
</div>
<div class="language-item">
<span>🇯🇵</span>
<span>Japanese</span>
</div>
<div class="language-item">
<span>🇨🇳</span>
<span>Chinese</span>
</div>
</div>
</section>

<!-- ========================================
SETTINGS
========================================= -->

<section class="glass-card settings-card" id="settings" style="display: none;">

<div class="result-title">
Settings
</div>

<p class="settings-description">
Customize your LingoAI experience.
</p>

<!-- Speech Speed -->
<div class="setting-item">

<div class="setting-info">
<h4>Speech Speed</h4>
<p>Control how fast translated text is spoken.</p>
</div>

<select id="speechSpeed" class="settings-select">

<option value="0.5">Slow</option>

<option value="0.75" selected>
Normal
</option>

<option value="1">Fast</option>

</select>

</div>


<!-- Appearance -->
<div class="setting-item">

<div class="setting-info">

<h4>Appearance</h4>

<p>
Choose how LingoAI looks.
</p>

</div>

<select id="appearance" class="settings-select">

<option value="dark" selected>
Dark
</option>

<option value="light">
Light
</option>

</select>

</div>


<!-- About -->
<div class="setting-item">

<div class="setting-info">

<h4>About LingoAI</h4>

<p>
LingoAI is an AI-powered translation
application designed to understand
context, relationship and tone.
</p>

</div>

</div>

</section>

<div class="quote">
<span class="quote-mark">
“
</span>
The limits of my language are the limits of my world.”
<span class="quote-author">
– Ludwig Wittgenstein
</span>
</div>
</main>
</div>
</body>
<script>
const translateBtn = document.getElementById('translateBtn');
translateBtn.addEventListener('click', async function () {
const message = document.getElementById('message').value;
const language = document.getElementById('language').value;
const relationship = document.getElementById('relationship').value;
const tone = document.getElementById('tone').value;
const result = document.getElementById('translationResult');
if (!message.trim()) {
result.textContent = 'Please enter a message to translate.';
return;
}
translateBtn.disabled = true;
translateBtn.textContent = 'Translating...';
try {
const response = await fetch('/translate', {
method: 'POST',
headers:{
'Content-Type': 'application/json',
'X-CSRF-TOKEN':'{{ csrf_token() }}',
'Accept': 'application/json'
},
body:JSON.stringify({
message:message,
language:language,
relationship:relationship,
tone:tone
})
});
const data = await response.json();
if (data.success) {

result.textContent = data.message;

// ========================================
// SAVE TRANSLATION TO HISTORY
// ========================================

let history =
JSON.parse(localStorage.getItem('lingoai_history')) || [];

const historyItem = {
original: message,
translation: data.message,
language: language,
relationship: relationship,
tone: tone,
date: new Date().toLocaleString()
};

history.unshift(historyItem);

localStorage.setItem(
'lingoai_history',
JSON.stringify(history)
);

} else {

result.textContent = data.error;

} 
} catch (error) {
console.error(error);
result.textContent =
'Unable to connect to the translation service.';
} finally {
translateBtn.disabled = false;
translateBtn.textContent =
'Translate with LingoAI';
}
});
// ========================================
// LISTEN
// ========================================

const listenBtn = document.getElementById('listenBtn');

const languageCodes = {
'🇬🇧 English': 'en-US',
'🇫🇷 French': 'fr-FR',
'🇪🇸 Spanish': 'es-ES',
'🇩🇪 German': 'de-DE',
'🇸🇦 Arabic': 'ar-SA',
'🇯🇵 Japanese': 'ja-JP',
'🇨🇳 Chinese': 'zh-CN'
};

function speakTranslation() {

const text = document
.getElementById('translationResult')
.textContent
.trim();

if (!text || text === 'Your translated message will appear here...') {
alert('There is no translation to listen to.');
return;
}

const selectedLanguage =
document.getElementById('language').value;

const languageCode =
languageCodes[selectedLanguage] || 'en-US';

// Get the voices available in the browser
const voices = window.speechSynthesis.getVoices();

console.log('Selected language:', selectedLanguage);
console.log('Language code:', languageCode);
console.log('Available voices:', voices);
// Find an exact voice first
let voice = voices.find(
v => v.lang.toLowerCase() === languageCode.toLowerCase()
);

// If exact voice isn't found, find one with the same language
if (!voice) {
const baseLanguage = languageCode.split('-')[0];

voice = voices.find(
v => v.lang.toLowerCase().startsWith(baseLanguage)
);
}

if (!voice) {
alert(
'No suitable voice was found for ' +
selectedLanguage
);
return;
}

console.log('Selected voice:', voice.name, voice.lang);

window.speechSynthesis.cancel();

const speech =
new SpeechSynthesisUtterance(text);

speech.voice = voice;
speech.lang = voice.lang;
const savedSpeed =
localStorage.getItem('lingoai_speech_speed');

speech.rate = savedSpeed
? parseFloat(savedSpeed)
: 0.75;
speech.pitch = 1;

listenBtn.innerHTML = '⏹ &nbsp; Stop';

speech.onend = function () {
listenBtn.innerHTML = '🔊 &nbsp; Listen';
};

speech.onerror = function (event) {

console.error(
'Speech error:',
event
);

listenBtn.innerHTML = '🔊 &nbsp; Listen';

alert(
'The browser could not play the selected language.'
);
};

window.speechSynthesis.speak(speech);
}

listenBtn.addEventListener(
'click',
function () {

if (window.speechSynthesis.speaking) {

window.speechSynthesis.cancel();

listenBtn.innerHTML =
'🔊 &nbsp; Listen';

return;
}

// Chrome sometimes loads voices asynchronously.
const voices =
window.speechSynthesis.getVoices();

if (voices.length === 0) {

window.speechSynthesis.onvoiceschanged =
function () {

speakTranslation();

window.speechSynthesis.onvoiceschanged =
null;
};

} else {

speakTranslation();
}
}
);
// ========================================
// LOAD HISTORY
// ========================================

function loadHistory() {

const historyList =
document.getElementById('historyList');

const history =
JSON.parse(localStorage.getItem('lingoai_history')) || [];

if (history.length === 0) {

historyList.innerHTML = `
<div class="history-empty">
No translation history yet.
</div>
`;

return;
}

historyList.innerHTML = '';

history.forEach(item => {

const historyElement =
document.createElement('div');

historyElement.className =
'history-item';

historyElement.innerHTML = `

<div class="history-language">
${item.language}
</div>

<div class="history-original">
${item.original}
</div>

<div class="history-translation">
${item.translation}
</div>

<div class="history-time">
${item.relationship}
•
${item.tone}
•
${item.date}
</div>

`;

historyList.appendChild(historyElement);

});
}
// ========================================
// HISTORY NAVIGATION
// ========================================

const historyNav =
document.getElementById('historyNav');

const historySection =
document.getElementById('history');

const translateSection =
document.querySelector('.content-grid');

historyNav.addEventListener('click', function (event) {

event.preventDefault();

translateSection.style.display = 'none';

historySection.style.display = 'block';

loadHistory();

});
// ========================================
// TRANSLATE NAVIGATION
// ========================================

const translateNav =
document.getElementById('translateNav');

translateNav.addEventListener('click', function (event) {

event.preventDefault();

historySection.style.display = 'none';
favoritesSection.style.display = 'none';

translateSection.style.display = 'grid';

});
const clearHistoryBtn = document.getElementById('clearHistoryBtn');

if (clearHistoryBtn) {

clearHistoryBtn.addEventListener('click', function () {

console.log('Clear History clicked');

const history =
JSON.parse(localStorage.getItem('lingoai_history')) || [];

console.log('Current history:', history);

if (history.length === 0) {
alert('There is no history to clear.');
return;
}

const confirmed = confirm(
'Are you sure you want to clear your translation history?'
);

if (!confirmed) {
return;
}

localStorage.removeItem('lingoai_history');

console.log('History cleared.');

loadHistory();
});

} else {

console.error('Clear History button was not found.');
}

// ========================================
// LOAD FAVORITES
// ========================================

function loadFavorites() {

const favoritesList =
document.getElementById('favoritesList');


const favorites =
JSON.parse(
localStorage.getItem('lingoai_favorites')
) || [];


if (favorites.length === 0) {

favoritesList.innerHTML = `
<div class="favorites-empty">
No favorite translations yet.
</div>
`;

return;
}


favoritesList.innerHTML = '';


favorites.forEach(function (item, index) {

const favoriteElement =
document.createElement('div');

favoriteElement.className =
'favorite-item';


favoriteElement.innerHTML = `

<button
class="remove-favorite-btn"
data-index="${index}"
title="Remove favorite"
>
♥
</button>

<div class="favorite-language">
${item.language}
</div>

<div class="favorite-original">
${item.original}
</div>

<div class="favorite-translation">
${item.translation}
</div>

<div class="favorite-time">
${item.relationship}
•
${item.tone}
•
${item.date}
</div>

`;


favoritesList.appendChild(
favoriteElement
);

});


// Remove individual favorites

const removeButtons =
document.querySelectorAll(
'.remove-favorite-btn'
);


removeButtons.forEach(function (button) {

button.addEventListener(
'click',
function () {

const index =
parseInt(
this.dataset.index
);


let favorites =
JSON.parse(
localStorage.getItem(
'lingoai_favorites'
)
) || [];


favorites.splice(index, 1);


localStorage.setItem(
'lingoai_favorites',
JSON.stringify(favorites)
);


loadFavorites();

}
);

});

}
// ========================================
// FAVORITES NAVIGATION
// ========================================

const favoritesNav =
document.getElementById('favoritesNav');

const favoritesSection =
document.getElementById('favorites');


favoritesNav.addEventListener(
'click',
function (event) {

event.preventDefault();


// Hide other sections

translateSection.style.display =
'none';

historySection.style.display =
'none';


// Show favorites

favoritesSection.style.display =
'block';


// Load favorites

loadFavorites();

}
);
// ========================================
// SAVED PHRASES NAVIGATION
// ========================================

const savedPhrasesNav =
document.getElementById('savedPhrasesNav');

const savedPhrasesSection =
document.getElementById('savedPhrases');

savedPhrasesNav.addEventListener('click', function (event) {

event.preventDefault();

// Hide other sections
translateSection.style.display = 'none';
historySection.style.display = 'none';

// Show saved phrases
savedPhrasesSection.style.display = 'block';

loadSavedPhrases();

});
// ========================================
// LOAD SAVED PHRASES
// ========================================

function loadSavedPhrases() {

const savedPhrasesList =
document.getElementById('savedPhrasesList');

const savedPhrases =
JSON.parse(
localStorage.getItem('lingoai_saved_phrases')
) || [];

if (savedPhrases.length === 0) {

savedPhrasesList.innerHTML = `
<div class="history-empty">
No saved phrases yet.
</div>
`;

return;
}

savedPhrasesList.innerHTML = '';

savedPhrases.forEach(function (item) {

const savedElement =
document.createElement('div');

savedElement.className =
'history-item';

savedElement.innerHTML = `

<div class="history-language">
${item.language}
</div>

<div class="history-original">
${item.original}
</div>

<div class="history-translation">
${item.translation}
</div>

<div class="history-time">
${item.relationship}
•
${item.tone}
•
${item.date}
</div>

`;

savedPhrasesList.appendChild(savedElement);

});
}
// ========================================
// SAVE PHRASE
// ========================================

const saveBtn = document.getElementById('saveBtn');

saveBtn.addEventListener('click', function () {

const message = document.getElementById('message').value;
const translation = document.getElementById('translationResult').textContent;
const language = document.getElementById('language').value;
const relationship = document.getElementById('relationship').value;
const tone = document.getElementById('tone').value;

// Check if there is a translation
if (
!translation.trim() ||
translation === 'Your translated message will appear here...'
) {
alert('There is no translation to save.');
return;
}

// Get existing saved phrases
let savedPhrases =
JSON.parse(localStorage.getItem('lingoai_saved_phrases')) || [];

// Create saved phrase
const savedPhrase = {
original: message,
translation: translation,
language: language,
relationship: relationship,
tone: tone,
date: new Date().toLocaleString()
};

// Add newest phrase to the beginning
savedPhrases.unshift(savedPhrase);

// Save it
localStorage.setItem(
'lingoai_saved_phrases',
JSON.stringify(savedPhrases)
);

// Change button temporarily
saveBtn.innerHTML = '✓ &nbsp; Saved';

setTimeout(function () {
saveBtn.innerHTML = '♡ &nbsp; Save';
}, 1500);

});

// ========================================
// LANGUAGES NAVIGATION
// ========================================

const languagesNav =
document.getElementById('languagesNav');

const languagesSection =
document.getElementById('languages');

languagesNav.addEventListener('click', function (event) {

event.preventDefault();

translateSection.style.display = 'none';
historySection.style.display = 'none';
favoritesSection.style.display = 'none';
savedPhrasesSection.style.display = 'none';

languagesSection.style.display = 'block';
});

// ========================================
// SETTINGS
// ========================================

const settingsNav =
document.getElementById('settingsNav');

const settingsSection =
document.getElementById('settings');


// ========================================
// SETTINGS NAVIGATION
// ========================================

if (settingsNav && settingsSection) {

settingsNav.addEventListener('click', function (event) {

event.preventDefault();

// Hide other sections
translateSection.style.display = 'none';
historySection.style.display = 'none';
favoritesSection.style.display = 'none';
savedPhrasesSection.style.display = 'none';
languagesSection.style.display = 'none';

// Show Settings
settingsSection.style.display = 'block';

});

}


// ========================================
// SPEECH SPEED
// ========================================

const speechSpeed =
document.getElementById('speechSpeed');

if (speechSpeed) {

// Load saved speech speed
const savedSpeed =
localStorage.getItem('lingoai_speech_speed');

if (savedSpeed) {
speechSpeed.value = savedSpeed;
}


// Save speech speed when changed
speechSpeed.addEventListener('change', function () {

localStorage.setItem(
'lingoai_speech_speed',
speechSpeed.value
);

});

}
// ========================================
// APPEARANCE SETTINGS
// ========================================

const appearance =
document.getElementById('appearance');

if (appearance) {

// Load saved appearance
const savedAppearance =
localStorage.getItem('lingoai_appearance');

if (savedAppearance) {
appearance.value = savedAppearance;
}

// Apply saved appearance when page loads
if (savedAppearance === 'light') {
document.body.classList.add('light-mode');
}

// Change appearance
appearance.addEventListener('change', function () {

const selectedAppearance =
appearance.value;

// Save preference
localStorage.setItem(
'lingoai_appearance',
selectedAppearance
);

// Apply selected appearance
if (selectedAppearance === 'light') {

document.body.classList.add('light-mode');

} else {

document.body.classList.remove('light-mode');

}

});
}

// ========================================
// CLEAR SAVED PHRASES
// ========================================

const clearSavedBtn =
document.getElementById('clearSavedBtn');

if (clearSavedBtn) {

clearSavedBtn.addEventListener('click', function () {

const savedPhrases =
    JSON.parse(
        localStorage.getItem('lingoai_saved_phrases')
    ) || [];

if (savedPhrases.length === 0) {

    alert('There are no saved phrases to clear.');
    return;

}

const confirmed = confirm(
    'Are you sure you want to clear all saved phrases?'
);

if (!confirmed) {
    return;
}

// Clear saved phrases
localStorage.removeItem('lingoai_saved_phrases');

// Refresh the saved phrases section
loadSavedPhrases();

alert('All saved phrases have been cleared.');

});

}
</script>
</html>

