@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('style')
.dongho{
	padding: 30px 30px;
	border-radius: 70px;
	font-size: 20px;
}
#check{
	padding: 7px 7px;
	width: 100%;
	background: white;
	border-radius: 20px;
	font-size: 18px;
	margin-top: 10px;
}
@stop
@section('content')

<script src="{{ '/jquery.min.js'}}"></script>
<script src="{{ '/js/moment.js'}}"></script>

 <?php $x=$question->id; ?>
<script type="text/javascript">
   $(window).ready( function(){
   	var time_start= new Date();
        var ryry = setInterval( function() {
            $.ajax({
				type: 'GET',
				url: "{{ url ('/time')}}",
				success: function (response) 
				{
					var res=response.split("\n");
					if (res[1]!={!!$question->id!!}) 
					{					 		location.reload();
						
					}
					else {
					// time_start = new Date();
					//$('#time_dest').html(time_count(res[3],res[2]));

					var server_current_time =  new Date(res[3]);
					var server_question_start_time =  new Date(res[2]);
					// console.log("res 3 " + server_current_time.getTime());
					// console.log("res 2 " + server_question_start_time.getTime());
					//console.log("res 3 " + server_current_time.toISOString());
					//console.log("res 2 " + server_question_start_time.toISOString());
					var thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server = server_current_time.getTime() - server_question_start_time;
					
					// console.log(thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server);
					time_start = (new Date()) - thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server;
					//console.log(time_start.toISOString);

					}
				}
			});
    		//console.log(time_start);
    		var time_left = {!! env('TIME_LIMIT', 30) !!} - (Math.floor((new Date() - time_start)/1000));
            $("#time_dest").html( Math.max(0, time_left) ) ;
            if(time_left <= 0){
            	$('input').prop('disabled', true);
            }
    	},1000);
      function time_count(time_begin, time_curr) {
        spl_time_begin = time_begin.split("-");
        spl_time_curr = time_curr.split("-");
        time_begin = new Date(spl_time_begin[0],spl_time_begin[1],spl_time_begin[2],spl_time_begin[3],spl_time_begin[4],spl_time_begin[5]);
        time_curr = new Date(spl_time_curr[0],spl_time_curr[1],spl_time_curr[2],spl_time_curr[3],spl_time_curr[4],spl_time_curr[5]);
        return (time_curr - time_begin)/1000;
        //...
      }
});
</script>
<center>
<button class="dongho" >
  <div id="time_dest">
  	
  </div>
</button>
</center>

<button type="button" class="btn btn-info btn-lg btn-block mt-4" style="padding: 20px 20px;">
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
<script src="{{ asset('js/app.js') }}">
    </script>
@stop