<?php

namespace App\Http\Controllers;
use App\usercontest;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Contest;
use App\Question;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkactive');
    }
    public function index(){
          $CQ = Question::select('questions.*','contests.*') 
            ->join('contests','questions.id','=','contests.currentquestion_id')
            ->where('contests.active','=',1)
            ->groupBy('questions.id')->get();
    	return view('UserContest');
    }
    public function receive_answer(Request $request){
        $history = new History;
        $history->user_id=$request['user_id'];
        $history->contest_id=$request['contest_id'];
        $history->question_id=$request['question_id'];
        $history->questions_answer_id=$request['questions_answer_id'];
        $history->save();
        return view('UserContest');
    }
    public function show_histories(){
        $question = DB::table('histories')->where('user_id','=',1)->get();
         return view('usercontest.show_histories',compact('question'));//
    }
}

