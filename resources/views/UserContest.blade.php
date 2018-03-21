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
<center>
<button class="dongho" id='demnguoc'>

</button>
</center>
 <?php $x=$question->id; ?>
<script type="text/javascript">
	
   $(window).ready( function(){
        time_dest = Date();
        var ryry = setInterval( function() 
        {
            $.ajax({
		type: 'GET',
		url: 'http://arena.test/time',
		success: function (response) 
		{
			 var res=response.split("\n");

			 if (res[1]=={!!$question->id!!})
			 	console.log(res);
			 else {
			 	location.reload();
			 }

		}
	});
          },1000);

      function time_count(time_begin, time_curr) {
        time_limit = 10;
        spl_time_begin = time_begin.split("-");
        spl_time_curr = time_curr.split("-");
        time_begin = new Date(spl_time_begin[0],spl_time_begin[1],spl_time_begin[2],spl_time_begin[3],spl_time_begin[4],spl_time_begin[5]);
        time_curr = new Date(spl_time_curr[0],spl_time_curr[1],spl_time_curr[2],spl_time_curr[3],spl_time_curr[4],spl_time_curr[5]);
        return time_limit - (time_curr - time_begin)/1000;

        //...
      }
});

</script>


<button type="button" class="btn btn-info btn-lg btn-block mt-4" style="padding: 20px 20px;">{!!$question->content!!}</button>
 {!!Form::open(['method'=>'POST', 'route'=>'usertransmit_answer']) !!}
@foreach($answers as $answer)  
<!-- <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="{{!!$answer->id!!}}">
  <label class="custom-control-label" for="customRadioInline1">{{!!$answer->content!!}}</label>
</div> -->
<div id="check">
	 <input id="dapan" name="dapan" type="radio" value="{{$answer->id}}"> 
	 <label class="dapan" for="dapan" >{{$answer->content}}</label>
</div>
 
@endforeach
<br>
<center><button type="submit" class="btn btn-success ">Đây là đáp án cuối cùng của tôi</button></center>
</form>
<script src="{{ asset('js/app.js') }}">
    </script>
@stop
