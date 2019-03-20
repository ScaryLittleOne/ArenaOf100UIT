@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('style')
@stop
@section('content')
<script type="text/javascript">
	var question_id = {!!$question->id!!};
	var timelimit= {!! env('TIME_LIMIT', 30) !!};
  var urll = "{{url('/time')}}";
</script>
<script type="text/javascript" src="{{url('/js/arena.js')}}"></script>

<center>
<div class="card bg-light text-black text-center p-1" style="width:50px;height:50px;margin-bottom: 20px;">
  <div id="time_dest">
  	
  </div>
</div>
</center>
<div class="card" style="width: 100%;margin-bottom: 20px;">
  <div class="card-body">
    <p class="card-text">
    <i>	{!!$question->content!!}</i>
    </p>
  </div>
</div>
 {!!Form::open(['method'=>'POST', 'route'=>'usertransmit_answer']) !!}
  <input name="user_id" type="hidden" value="{{$user->id}}">
  <input name="contest_id" type="hidden" value="{{$contest_id}}">
  <input name="question_id" type="hidden" value="{{$question->id}}">

@foreach($answers as $answer)  
<div id="check" >
   <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%;">
    <label class="btn btn-light active" for="questions_answer_id" style="text-align:left;width: 100%;white-space:inherit;">
      <input name="questions_answer_id" value="{{$answer->id}}" type="radio" name="options" id="question_answer_id" autocomplete="off" checked>{{$answer->content}}
    </label>
   </div>
</div>

@endforeach
<p class="card-text">
  {!!$choosen_answer!!}
</p>
<br>
<center>
<input type="submit" class="btn btn-success " value="Đây là đáp án cuối cùng của tôi" />
</center>
</form>
<script src="{{ asset('js/app.js') }}"></script>
@stop