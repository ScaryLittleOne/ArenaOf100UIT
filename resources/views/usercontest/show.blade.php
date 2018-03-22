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
<h1>CUỘC THI CHƯA BẮT ĐẦU</h1>
<script type="text/javascript">
	
   $(window).ready( function(){
        var ryry = setInterval( function() 
        {
            $.ajax({
		type: 'GET',
		url: "{{ url ('/time')}}",

		success: function (response) 
		{
			 	location.reload();
		}
	});
          },7000);

      
});


</script>

<script src="{{ asset('js/app.js') }}">
    </script>
@stop
