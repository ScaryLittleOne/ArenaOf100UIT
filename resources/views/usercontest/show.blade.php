@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('content')

<center><h1 style="color:white;margin-top:10%;">CUỘC THI CHƯA BẮT ĐẦU</h1></center>
<script type="text/javascript">
	
   $(window).ready( function(){
        var ryry = setInterval( function() 
        {
            $.ajax({
		type: 'GET',
		url: "{{ url ('/time')}}",

		success: function (response) 
		{
			var res=response.split("\n");
			if (res[1]!=1)
			{
				location.reload();
			} 
		}
	});
          },2000);

      
});


</script>
@stop
