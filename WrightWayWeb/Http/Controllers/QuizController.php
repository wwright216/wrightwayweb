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

        $this->validate(request(), [
            'Question1' => 'required',
            'Question2' => 'required',
            'Question3' => 'required',
            'Question4' => 'required'
            ]);

        $totalCorrect = 0;

        if (request('Question1') == "C")
        {
            $totalCorrect++;
        }
        
        if (request('Question2') == "A")
        {
            $totalCorrect++;
        }
        if (request('Question3') == "B")
        {
            $totalCorrect++;
        }
        if (request('Question4') == "D")
        {
            $totalCorrect++;
        }
        
        $score    = ($totalCorrect / 4 * 100);
        $response = (String) view ('quiz.results', compact('score'))->render();

        return response()->json($response, 200);
    }
}
