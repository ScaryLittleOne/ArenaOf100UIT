<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css">

           <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UIT| Đấu trường ánh sáng</title>
        <link rel="shortcut icon" href="{{ url('/icon.png') }}">
        <link rel="stylesheet" type="text/css" href="{{url('/welcome.css')}}">
</head>
<body>
       
<div id="logouit">
    <img src="{{ url('/uit.png') }}" width="15%" height="15%">
    <img src="{{ url('/logodoanthanhnien.png') }}" width="12%" height="12%">
    <img src="{{ url('/logokhmt.png') }}" width="15%" height="15%">

</div>                
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right">
                    
                    @auth
                        <a class="btn btn-primary" href="{{ url('/home') }}"><strong>Vào đấu trường</strong></a>
                        <a class="btn btn-danger" href="{{ route('logout') }}"><strong>Đăng Xuất</strong></a>
                    @else
                        <a class="btn btn-primary" href="{{ route('login') }}"><strong>Đăng Nhập</strong></a>
                    @endauth
                    
                </div>
            @endif  


            <div class="content">
            <center>
                <div id="chaomung">
                    <img src="{{ url('/dautruong100.png') }}" height="100%" width="100%">
                </div>
           </center>
            </div>
        </div>
    <div class="logowecode">
        <img src="{{ url('/logowecode.svg') }}" height="100%" width="100%">
    </div>
</body>
</html>
