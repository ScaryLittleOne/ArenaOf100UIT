@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('style')
@stop
@section('content')
<script type="text/javascript">
	var question_id = {!!$question->id!!};
	var timelimit= {!! env('TIME_LIMIT', 1000) !!};
  var urll = "{{url('/time')}}";
</script>
<script type="text/javascript" src="{{url('/js/arena.js')}}"></script>

<center>
<button class="btn btn-outline-secondary" >
  <div id="time_dest">
  	
  </div>
</button>
</center>

<button type="button" class="question">
<i>	{!!$question->content!!}</i>
</button>
 {!!Form::open(['method'=>'POST', 'route'=>'usertransmit_answer']) !!}
  <input name="user_id" type="hidden" value="{{$user->id}}">
  <input name="contest_id" type="hidden" value="{{$contest_id}}">
  <input name="question_id" type="hidden" value="{{$question->id}}">

@foreach($answers as $answer)  
<div id="check">
	 <input id="question_answer_id" name="questions_answer_id" type="radio" value="{{$answer->id}}"> 
	 <label class="question_answer_id" for="questions_answer_id" >{{$answer->content}}</label>
</div>
 
@endforeach
<br>
<center>
<input type="submit" class="btn btn-success " value="Đây là đáp án cuối cùng của tôi" />
</center>
</form>
<script src="{{ asset('js/app.js') }}"></script>
@stop