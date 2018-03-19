<?php

namespace App\Http\Controllers;
use DB;
use App\Question;
use App\Questions_answer;       /// Dung de ket hop Them cau hoi + dap an luon
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class question_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('checkadmin');
            /*$user = Auth::user();
            $id = Auth::id();
            var_dump($user);
            var_dump($id);*/
        }
       

    public function index(){
        /*$this->middleware('auth');
        $user = Auth::user();
            if ($user->admin==0){
                abort(403, 'Unauthorized Access. Your IP has been reported to Admin');
            }*/
        $question = Question::all();
        return view('question.list',compact('question'));//['questions' => Question::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        
        $question->content = $request['content'];
        $question->contest_id = $request['contest_id'];
        $question->save();

        $check = new Questions_answer;
        $check->abcd=$request['correct'];

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'A';
        $questions_answer->content = $request['content_A'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'B';
        $questions_answer->content = $request['content_B'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'C';
        $questions_answer->content = $request['content_C'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'D';
        $questions_answer->content = $request['content_D'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

    //    session()->flash('message', 'Thêm câu hỏi thành công!');
        return redirect('questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    
    public function show(Question $question){

        $answers = DB::table('questions_answers')->where('question_id','=',$question->id)->get();
        //$QA = Questions_answer::all();echo $QA;
  
        return view('question.show',compact('question'),compact('answers'));//['question' => Question::findOrFail($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        $answers = DB::table('questions_answers')->where('question_id','=',$question->id)->get();
        return view('question.edit', compact('question'), compact('answers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        
        $question->content = $request->content;
        $question->contest_id = $request->contest_id;
        $question->save();

       /* $check = new Questions_answer;
        $check->abcd=$request['correct'];

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'A';
        $questions_answer->content = $request['content_A'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'B';
        $questions_answer->content = $request['content_B'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'C';
        $questions_answer->content = $request['content_C'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();

        $questions_answer = new Questions_answer;
        $questions_answer->abcd = 'D';
        $questions_answer->content = $request['content_D'];
        if ($check->abcd==$questions_answer->abcd)
            {
                $questions_answer->correct = 1;
            } else
            {
                 $questions_answer->correct = 0;
            }
        $questions_answer->question_id = $question->id;
        $questions_answer ->save();*/

    {   
        $question->content = $request->content;
        $question->contest_id = $request->contest_id;
        $question->save();
        $answers->content = $request->content;
        $answers->save();
        
        foreach($request->ids as $index => $id) {
            $tmp_answer = Questions_answer::find($id);
            $tmp_answer->content = $request->answers[$index];
            $tmp_answer->correct = ($tmp_answer->abcd == $request->correct);
            $tmp_answer->save();
        }
        
        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $answers = DB::table('questions_answers')->where('question_id','=',$question->id)->delete();
        $question->delete();
        return redirect('questions');
    }

}
