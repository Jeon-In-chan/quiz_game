<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    //show homepage
    public function getHomepage()
    {
        return view('quiz.homepage');
    }

    //show quiz
    public function getQuizpage()
    {
        return view('quiz.quizPage');
    }
}
