<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\usercontest;
use DB;
use Illuminate\Support\Facades\Auth;
=======
use DB;
use Illuminate\Support\Facades\Auth;
use App\Contest;
use App\Question;
use Illuminate\Support\Collection;
>>>>>>> ea059602ba6fa860dc714424be5b60d4b0d46499
use Illuminate\Http\Request;

class user_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkactive');
    }
    public function index(){
<<<<<<< HEAD
          echo(now());
          echo(date('Y-m-d H:i:s'));
        	return view('usercontest.show');
=======
        $CQ = Question::select('questions.*','contests.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Bang Contest
            ->join('contests','questions.id','=','contests.currentquestion_id')
            ->where('contests.active','=',1)
            ->groupBy('questions.id')->get();
        //var_dump($CQ);
    	return view('UserContest');
>>>>>>> ea059602ba6fa860dc714424be5b60d4b0d46499
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
      //  echo($question->user_id);
       // echo($question->contest_id);
    }
}

