@extends('layouts.app')
@section('title','Đấu trường 100')
@section('style')
.dongho{
	padding: 40px 40px;
	border-radius: 70px;
	background: #fff;
	font-size: 30px;
}
@stop
@section('content')
<center>
<button class="dongho" id='demnguoc'><span id='dem'></span> 
<span id='donvi'></span>
</button>
<button class="dongho" id='click'>BẮT ĐẦU</button>
</center>
<script type="text/javascript">
	var thoigian = 30;
var donvi = "giây";
var khoangcach = 1000; // =1s
if (donvi == "phút") khoangcach = 60000; //=1 phút
var bandau = thoigian;
document.getElementById("dem").innerHTML = " "+thoigian.toString();
document.getElementById("click").addEventListener("click", opennewtab, false);
document.getElementById("demnguoc").style.display = 'none';
document.getElementById("donvi").innerHTML = donvi;
function demlui() {
    document.getElementById("click").style.display = 'none';
    document.getElementById("demnguoc").style.display = 'block';
    var timer = setInterval(function () {
        thoigian--;
        if (thoigian < 0) {
            document.getElementById("demnguoc").style.display = 'none';
            document.getElementById("click").style.display = 'block';
            clearInterval(timer);
            document.getElementById("dem").innerHTML = " "+bandau.toString();
            thoigian = bandau;
        } else {
            document.getElementById("dem").innerHTML = " "+thoigian.toString();
        }
    }, khoangcach);
};
document.getElementById("click").onclick = demlui;
function opennewtab(){
    var a = document.createElement("a");
    a.href = "/home";
    var evt = document.createEvent("MouseEvents");
    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0,
                                true, false, false, false, 0, null);
    a.dispatchEvent(evt);
}
</script>
@stop