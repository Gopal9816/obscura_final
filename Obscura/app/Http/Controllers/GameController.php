<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $level = $user->level;

        $levelsList = array(
            1 => 'levels.question',
            2 => 'levels.teaser'
        );

        $currentLevel = $levelsList[$level];
        return view($currentLevel)->with('user',$user);
    }

    public function pill(){
        $user = Auth::user();

        return view('levels.redpill')->with('user',$user);
    }

    public function teaser(){
        return view('levels.teaser');
    }

    public function answer(Request $request)
    {
        # code...
        $user = Auth::user();
        $answer = $request->input('answer');
        $answerList = array(
            1 => 'wachowski',
        );
        $level = $user->level;
        $correctAns = $answerList[$level];
        if($answer == $correctAns){
            $user->level += 1;
            $user->save();
            return redirect('/game');
        }
        else
            return redirect('/game/red');
    }

    
}
