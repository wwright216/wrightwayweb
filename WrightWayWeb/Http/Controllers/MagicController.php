<?php

namespace WrightWayWeb\Http\Controllers;

use Illuminate\Http\Request;
use WrightWayWeb\Magic;

class MagicController extends Controller
{
    public function index(){
    	return view('magic.index');
    }
    public function show(){
        $question = request('question');
    	$answers  = [
            'Heck no!',
            'How should I know?',
            'Extremely Unlikely',
            'The possibilities look good...',
            'Absolutely!',
            'Hard to say...try again'
        ];

    	srand((double)microtime() * 1000000);
    	
        $response = $question ? $answers [rand(0, (sizeof($answers)-1))] : "I can only answer";

        return response()->json($response, 200);
    }
}
