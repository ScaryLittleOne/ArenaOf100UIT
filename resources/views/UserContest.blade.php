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

 <?php $x=$question->id; ?>
<script type="text/javascript">
	
   $(window).ready( function(){
   	time_start = new Date();
        var ryry = setInterval( function() {
            $.ajax({
				type: 'GET',
				url: "{{ url ('/time')}}",

				success: function (response) 
				{
					 var res=response.split("\n");
					 if (res[1]!={!!$question->id!!}) 
					 	{
					 		location.reload();
					 	}
					 else {
					 	// time_start = new Date();
					 	//$('#time_dest').html(time_count(res[3],res[2]));
				 		// // console.log("res3" + Date.parse(res[3]));
				 		// // console.log("res2" + Date.parse(res[2]));
					 	//  var thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server 
					 	//  	= (new Date(res[3])) - (new Date(res[2]));
					 	// // console.log(thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server);
					 	//  time_start = (new Date()) - thoi_gian_da_qua_la_nhu_nhau_voi_moi_may_ca_client_lan_server;
					 	// // console.log(time_start.toISOString);

					 }

				}
			});
    		console.log((new Date()));
            $("#time_dest").html(Math.floor((new Date() - time_start)/1000)) ;
    	},1000);

      function time_count(time_begin, time_curr) {
        time_limit = 30;
        spl_time_begin = time_begin.split("-");
        spl_time_curr = time_curr.split("-");
        time_begin = new Date(spl_time_begin[0],spl_time_begin[1],spl_time_begin[2],spl_time_begin[3],spl_time_begin[4],spl_time_begin[5]);
        time_curr = new Date(spl_time_curr[0],spl_time_curr[1],spl_time_curr[2],spl_time_curr[3],spl_time_curr[4],spl_time_curr[5]);
        return time_limit - (time_curr - time_begin)/1000;

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
	 <input id="dapan" name="questions_answer_id" type="radio" value="{{$answer->id}}"> 
	 <label class="dapan" for="questions_answer_id" >{{$answer->content}}</label>
</div>
 
@endforeach
<br>
<center><button type="submit" class="btn btn-success ">Đây là đáp án cuối cùng của tôi</button></center>
</form>
<script src="{{ asset('js/app.js') }}">
    </script>
@stop
