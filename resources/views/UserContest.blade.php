@extends('layouts.app')
@section('title','Đấu trường 100')
@section('style')
.dongho{
padding: 40px 40px;
	border-radius: 70px;
	font-size: 30px;
}
@stop
@section('content')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<center>
<button class="dongho" id='demnguoc'><span id='dem'></span> 
<span id='donvi'></span>
</button>
<button class="dongho" id='click'>BẮT ĐẦU</button>
</center>
<span id="time" style="display: none;"></span>
<script type="text/javascript">
   $("#click").click(function(e){
        time_dest = 0;
        e.preventDefault();
        $("#time").load("http://arena.test/user #ry");
        var ryry = setInterval( function() {
            $("#time").load("http://arena.test/user #ry");
            if (time_dest == 0) 
                time_dest = $("#ry").html();
            time_curr = $("#ry").html();
            time_dem = time_count(time_dest, time_curr)
            $("#dem").html(time_dem);
            if (time_dem<=0) clearInterval(ryry);
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