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
        return view('UserContest',
            ['contest_id' => $contest->id, 
             'user' => Auth::user(), 
              'question' => $question, 
              'answers' => $question->questions_answers()->get() 
            ]
        );

        return view('UserContest',compact('question'),compact('answers'));

    }               
    public function transmit_answer(Request $request){//Gui Dap An Len Table History
        $currentcontest=Contest::where('active', 1)->first();
        if ($currentcontest->current_questions()->first()->id!=$request['question_id']) return redirect('usercontest');
       
        $time_question=$currentcontest->startcurrentquestion;//tg bat dau cau hoi
        $time_question=strtotime($time_question);
        $time_answer=strtotime("now");
        $interval=$time_answer-$time_question;
        if ($interval<=env('TIME_LIMIT')) $x=1;
        else $x=0;
        $old_history = History::where([
            'user_id' => $request['user_id'],
            'contest_id' => $request['contest_id'],
            'question_id' => $request['question_id']
        ]);
        

        if ($old_history->get()->count() == 0){

            if ($x == true) History::create(        [
                'user_id' => $request['user_id'],
                'contest_id' => $request['contest_id'],
                'questions_answer_id' => $request['questions_answer_id'],
                'question_id' => $request['question_id'],
                ]);
        } else {
            if ($x == true) {
                $old_history->update(        [
                    'user_id' => $request['user_id'],
                    'contest_id' => $request['contest_id'],
                    'questions_answer_id' => $request['questions_answer_id'],
                    'question_id' => $request['question_id']
                    ]);
                return redirect('usercontest');  
            }
        }
        if ($x==true){
        return redirect('usercontest');  
        }
        else  return view('errors.500');
}
    

    public function time() {
      $user=DB::table('contests')->where('active','=',true)->first();   
      echo($user->id."\n");
      echo($user->currentquestion_id."\n");
      echo($user->startcurrentquestion."\n");   
      echo(now()."\n");
}
}