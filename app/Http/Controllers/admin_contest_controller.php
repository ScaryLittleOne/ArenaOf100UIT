<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Carbon\Carbon;
//namespace Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
//use App\Contest;
//use DB;
use DateTime;
use App\Questions_answer;
use App\Contest;
use App\User;
use App\History;
use DB;

class admin_contest_controller extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkadmin');
    }
    public function index(){

    	$questions = Question::all();
        //$contest = Contest::find();
        //$contt = Contest::all();
        //$contest = new Contest;
        $cont = DB::table('contests')->where('active','=',true)->first();
        $questionc = DB::table('questions')->where('id','=',$cont->currentquestion_id)->first();
        //return view('AdminContest',compact('questions'),compact('questionc'), compact('cont'));
    	return view('AdminContest',['questions' => $questions, 'questionc' => $questionc, 'cont' => $cont]);
    }

    /*public function change(Request $request, Contest $contest){
    	var_dump($request->id);
    	///Doi cau hoi hien tai trong table contest
    	///
        //$contest = new Contest;
        //$contest = Contest::find($request['contest_id']);
        $contest_id = $request['contest_id'];
        $contest->active = true;
        $contest->currentquestion_id = $request->id;
    	return $this->index();
    	$questions = Question::all();
        $questioncurrent = DB::table('contests')->where('active','=',true)->get();
    	return view('AdminContest',compact('questions'),compact('questioncurrent'));
    }*/

    public function disable_user_with_wrong_answer_for_current_question(){
        $current_question = Contest::where('active', 1)->first()->current_questions()->first();
        
        //Disable every single non-admin and still active user
        User::where(['admin'=>0,'active'=>1])->update(['active'=>0]); 

        //Re-enable users with correct answer
        foreach (History::where('question_id', $current_question->id) as $hist){
            if($hist->question_answer->abcd == $current_question->correct_answer->abcd){
                $hist->user->active = 1;
                $hist->user->save();
            }
        }
    }

    public function change(Request $request)//Request $request){//Chua Test
    {
        //checkuser

        if (true){
            $this->disable_user_with_wrong_answer_for_current_question();
        } else 
        {
            $checks = History::select('histories.*','users.id','questions.content','questions_answers.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
                ->join('users','user_id','=','users.id')
                ->join('questions','question_id','=','questions.id')
                ->join('questions_answers','questions_answer_id','=','questions_answers.id')
                ->groupBy('histories.id')
                ->get();
            $corrects = DB::table('questions_answers')->where('id','=',$request->id)->get();
            $co = new Questions_answer();
            foreach($corrects as $correct)
            {
                if($correct->correct == true) $co=$correct;
            }
            foreach ($checks as $check) 
            {
                //var_dump($check);
                $us = User::find($check->user_id)->first();
                $us->active=0;
                $us->save();
            } 
                if($check->abcd!=$co->abcd)
                {
                    //var_dump($check);
                    $us = User::find($check->user_id)->first();
                    $us->active=false;
                    $us->save();
                } 
        }
        Contest::where(['active'=>true])
                ->update(['currentquestion_id'=> $request->id,'startcurrentquestion'=> now()]);
        //$cont = DB::table('contests')->where('active','=',true)->update(['startcurrentquestion'=> now()]);       
        return $this->index();

        $cont = DB::table('contests')->where('active','=',true)->update(['currentquestion_id'=> $request->id]);
        $now = now();
        $cont = DB::table('contests')->where('active','=',true)->update(['startcurrentquestion'=> $now]);
    }
    public function changecontest(Request $request)
    {
        $cont = DB::table('contests')->where('active','=',true)->update(['active'=> false]);
        $cont = DB::table('contests')->where('id','=',$request['contest_id'])->update(['active'=> true]);
        /*$contt = Contest::all();
        foreach($contt as $cont)
        {
            if ($conts->id == $contt->id)
            {
                $cont -> active = 1;
                $cont -> save();
            } else
            {
                 $cont -> active = 0;
                 $cont -> save();
            }
           
        }*/

        $users=User::all();
        foreach($users as $user)
        {
            $user->active = true;
            $user->save();
        }
        return redirect('admincontest');
    } 

    public function check_answer(Request $request){ // Kiem Tra Cau Tra Loi Va Kick User Khi TL sai (Unfinished)
        $user = User::select('users.*')->where('id','=','$request->id')->get();
        $user->active = 0;
        $user->save();
    }
    public function create_contest(){ //Tao Contest
        $NewCon = new Contest;
        $NewCon ->currentquestion_id = 1;
        $NewCon ->active = 0;
        $NewCon ->save();
    }

    public function destroy_contest(Contest $cont){//Xoa Contest
        $cont -> destroy ();
    }

    /*public function activate_contest(Contest $cont){
        $cont -> active = 1;
        $cont -> save();
    }*/

    /*public function deactivate_contest(){
        $contt = Contest::all();
        foreach($contt as $cont) {
        {
            $cont -> active = 0;
            $cont -> save();
        }}
        return $this->changecontest();
    }*/
    public function Statistic ()
    {
        if (false){
            $stas = History::select('histories.*','users.username','questions.content','questions_answers.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
                ->join('users','user_id','=','users.id')
                ->join('questions','question_id','=','questions.id')
                ->join('questions_answers','questions_answer_id','=','questions_answers.id')
                ->groupBy('histories.id')
                ->get();
            $A=(int)0; $B=(int)0; $C=(int)0; $D=(int)0;
            $cont = DB::table('contests')->where('id','=',$request->id)->first();
            foreach($stas as $sta)
            {
                if($sta->contest_id==$request->id && $sta->question_id==$cont->currentquestion_id)
                {
                    if($sta->abcd=='A') $A=$A+1;
                    if($sta->abcd=='B') $B=$B+1;
                    if($sta->abcd=='C') $C=$C+1;
                    if($sta->abcd=='D') $D=$D+1;
                }
            }
        }
        $current_contest = Contest::where('active',1)->first();
        $current_history = History::where([
                'contest_id' => $current_contest->id
                ,'question_id' => $current_contest->currentquestion_id
                ])->get();
        
        $data['correct_answer'] = $current_contest->current_questions->correct_answer->abcd;
        $data['still_active'] = User::where(['admin'=>0,'active'=>1])->count();
        for($i = 'A'; $i <= 'D'; $i++){
            $data[$i] = $current_history->filter(function($value, $key){
                            return $value->question_answer->abcd == $i;
                            }
                        )->count();
        }

        return view('ShowStatistic',['A' => $A, 'B' => $B, 'C' => $C, 'D' => $D]);
    }


    public function show_history(){//Chuc Nang Cua Admin ->Show Toan Bo Lich Su Thi Dau
        $MergeHistory = History::select('histories.*','users.username','questions.content as QT','questions_answers.*')  //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
            ->join('users','user_id','=','users.id')
            ->join('questions','question_id','=','questions.id')
            ->join('questions_answers','questions_answer_id','=','questions_answers.id')
            ->groupBy('histories.id')
            ->get();
        //$MergeHistory = History::all();
        return view('ShowHistory',compact('MergeHistory') );
    }
}
