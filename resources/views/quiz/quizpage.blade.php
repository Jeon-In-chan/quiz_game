<!-- resources\views\quiz\quiz.blade.php -->
@extends('layouts.app') <!-- 레이아웃 확장 -->

@section('content')
<h2>Quiz Game</h2>
<p>퀴즈가 시작되었습니다! 첫 번째 문제를 확인하세요.</p>

<div class="question">
    <h3>문제 1: 대한민국의 수도는?</h3>
</div>

<div class="options">
    <button class="button">서울</button>
    <button class="button">부산</button>
    <button class="button">인천</button>
    <button class="button">대구</button>
</div>

<div class="timer">
    <p>시간: <span id="timer">60</span>초</p>
</div>
