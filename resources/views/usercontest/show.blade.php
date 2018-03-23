@extends('layouts.app')
@section('title','Đấu trường ánh sáng')
@section('content')

<script src="{{ '/jquery.min.js'}}"></script>
<center><h1>CUỘC THI CHƯA BẮT ĐẦU</h1></center>
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

<script src="{{ asset('js/app.js') }}">
    </script>
@stop
