<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use WrightWayWeb\Quiz;
class QuizController extends Controller
{
    public function index() 
    {
    	return view('quiz.index');
    }

    public function results()
    {
    	//validate that all questions have been answered
    	$this->validate(request(), [
    		'Question1' => 'required',
    		'Question2' => 'required',
    		'Question3' => 'required',
    		'Question4' => 'required'
    		]);
    	//grade the quiz
    	// $grade = new Quiz;
    	$answer1 = request('Question1');
    	$answer2 = request('Question2');
        $answer3 = request('Question3');
        $answer4 = request('Question4');
        $totalCorrect = 0;
        if ($answer1 == "C") {$totalCorrect++;}
        if ($answer2 == "A") {$totalCorrect++;}
        if ($answer3 == "B") {$totalCorrect++;}
        if ($answer4 == "D") {$totalCorrect++;}
        $score = ($totalCorrect / 4 * 100);
        return view ('quiz.results', compact('score'));
    }
}
