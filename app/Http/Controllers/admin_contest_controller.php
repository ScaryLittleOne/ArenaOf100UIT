<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
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
        $cont = DB::table('contests')->where('active','=',true)->first();
        $questionc = DB::table('questions')->where('id','=',$cont->currentquestion_id)->first();

    	return view('AdminContest',['questions' => $questions, 'questionc' => $questionc, 'cont' => $cont]);
    }

    public function disable_user_with_wrong_answer_for_current_question(){
        $current_question = Contest::where('active', 1)->first()->current_questions()->first();
        if ($current_question->id ==1) return ;
        //Disable every single non-admin and still active user
        User::where(['admin'=>0,'active'=>1])->update(['active'=>0]); 

        //Re-enable users with correct answer
        foreach (History::where('question_id', $current_question->id)->get() as $hist){
            if($hist->question_answer->abcd == $current_question->correct_answer->first()->abcd){
                $hist->user->active = 1;
                $hist->user->save();
            }
        }
    }

    public function change(Request $request)//Request $request){//Chua Test
    {
        //checkuser

        $this->disable_user_with_wrong_answer_for_current_question();
        Contest::where(['active'=>true])
                ->update(['currentquestion_id'=> $request->id,'startcurrentquestion'=> now()]);
        return $this->index();

    }
    public function changecontest(Request $request)
    {
        $cont = DB::table('contests')->where('active','=',true)->update(['active'=> false]);
        $cont = DB::table('contests')->where('id','=',$request['contest_id'])->update(['active'=> true]);

        DB::table('contests')->update(['currentquestion_id'=>1]);

        User::where(['active' => 0])->update(['active' => 1]);

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
    public function Statistic ()
    {
        $current_contest = Contest::where('active',1)->first();
        $current_history = History::where([
                'contest_id' => $current_contest->id
                ,'question_id' => $current_contest->currentquestion_id
                ])->get();
        
        $data['correct_answer'] = $current_contest->current_questions->correct_answer->first()->abcd;
        $data['still_active'] = User::where(['admin'=>0,'active'=>1])->count();
        for($i = 'A'; $i <= 'D'; $i++){
            $data[$i] = $current_history->filter(function($value, $key)use( &$i){
                            //var_dump($i);
                            return $value->question_answer->abcd == $i;
                            }
                        )->count();
            if ($i==$data['correct_answer'])
            {
                $data['number_correct']=$data[$i];
                $data['number_wrong']=$data['still_active']-$data['number_correct'];
            }
        }

        //return $data['A'];
        return view('ShowStatistic',$data);
    }


    public function show_history(){//Chuc Nang Cua Admin ->Show Toan Bo Lich Su Thi Dau
        //Lay Duoc Cau Hoi Hien Tai Dua Tren Contest_CQ va Contest.Active
        if (1 == 2) {
            $MergeHistory = History::select('histories.*','users.username','questions.content as QT','questions_answers.*')  
                ->join('users','user_id','=','users.id')
                ->join('questions','question_id','=','questions.id')
                ->join('questions_answers','questions_answer_id','=','questions_answers.id')
                ->groupBy('histories.id')
                ->get();
        } else {
            return view('ShowHistory', ['history' => History::all()]);
        }
        return view('ShowHistory',compact('MergeHistory') );
    }
}
