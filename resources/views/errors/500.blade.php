<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>
     	GAME OVER
     </title>
    <link rel="shortcut icon" href="{{ url('/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/loi500.css')}}">
<style type="text/css">
            
</style>
</head>
<body>
<center>
    <div class="flex-center position-ref full-height">
    <div id="chaomung">
        <img style="margin-bottom: 40px;" src="{{ url('/dautruong100.png') }}" height="80%" width="80%">
    </div>

	<h2>CHÚC MỪNG THÍ CHỦ ĐÃ LÊN BẢNG, XIN VUI LÒNG CHỜ HỒI SINH</h2> <br>
    <h1>♥</h1><br>
    <a class="btn btn-primary pt-2" href="{{url('/')}}">
    <h5>quay lại sảnh chờ</h5>
</a>
    </div>
    
</center>
</body>
</html>