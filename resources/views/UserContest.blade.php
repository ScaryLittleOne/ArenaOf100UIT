@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('style')
.dongho{
padding: 40px 40px;
	border-radius: 70px;
	font-size: 30px;
}
@stop
@section('content')

<script src="{{ '/jquery.min.js'}}"></script>
<table>
        {!!$question->content!!}
         
</table>
@foreach($answers as $answer)
    <table>     
        {!!$answer->id!!}
        {!!$answer->content!!}
    </table>
    
@endforeach

<center>
<button class="dongho" id='demnguoc'>
    <span id='dem'></span> 
    <span id='donvi'></span>
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


@stop
