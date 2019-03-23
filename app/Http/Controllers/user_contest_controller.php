<?php

namespace App\Http\Controllers;
use App\usercontest;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Contest;
use App\Question;
use App\History;
use App\Questions_answer; 
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
        $contest=Contest::where('active', 1)->first();
        $question=$contest->current_questions()->first();
        if ($question->id==1) return view('usercontest.show');   
        $choosen_answer=History::where([
                'user_id' => Auth::user()->id,
                'contest_id' => $contest->id,
                'question_id' => $question->id
                ])->first();
        if ($choosen_answer!=NULL) $choosen_answer=$choosen_answer->questions_answer_id;
        return view('UserContest',
            ['contest_id' => $contest->id, 
            'user' => Auth::user(), 
            'question' => $question, 
            'answers' => $question->questions_answers()->get(),
            'choosen_answer' => $choosen_answer
            ]
        );

    
        //return view('UserContest',compact('question'),compact('answers'));
    
    }               
    public function transmit_answer(Request $request){//Gui Dap An Len Table History
        $old_history = History::where([
            'user_id' => $request['user_id'],
            'contest_id' => $request['contest_id'],
            'question_id' => $request['question_id']
        ]);
    
        $currentcontest=Contest::where('active', 1)->first();
        if ($currentcontest->current_questions()->first()->id!=$request['question_id']) return redirect('usercontest');
       
        $time_question=$currentcontest->startcurrentquestion;//tg bat dau cau hoi
        $time_question=strtotime($time_question);
        $time_answer=strtotime("now");
        $interval=$time_answer-$time_question;
        
        if ($old_history->get()->count() == 0) $ham_thuc_hien = 'App\History::create';
        else $ham_thuc_hien = array($old_history, 'update');
        
        if ($interval<=env('TIME_LIMIT') &&  $request['questions_answer_id']!=null) {
            // History::create(        [
            $ham_thuc_hien(        [
                'user_id' => $request['user_id'],
                'contest_id' => $request['contest_id'],
                'questions_answer_id' => $request['questions_answer_id'],
                'question_id' => $request['question_id']
            ]);
        }
            // return redirect('usercontest');
            
            // if ($interval<=env('TIME_LIMIT')) $x=1;
            // else $x=0;
            // if ($x == true) {
            //      History::create(        [
            //     'user_id' => $request['user_id'],
            //     'contest_id' => $request['contest_id'],
            //     'questions_answer_id' => $request['questions_answer_id'],
            //     'question_id' => $request['question_id'],
            //     ]);
            // } 
            // return redirect('usercontest');
    
        return redirect('usercontest');
}
    

    public function time() {
      $user=DB::table('contests')->where('active','=',true)->first();   
      echo($user->id."\n");
      echo($user->currentquestion_id."\n");
      echo($user->startcurrentquestion."\n");   
      echo(now()."\n");
}
}