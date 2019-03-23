
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>UIT | @yield('title')</title>
    <link rel="shortcut icon" href="{{ url('/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/layout.css')}}">
    <style type="text/css">
    @yield('style');
    </style>
</head>
<body>
<script src="{{ url('/jquery.min.js')}}"></script>

    <nav class="navbar navbar-expand-md navbar-light ">
        
        <div class="flex-center position-ref full-height">
            <div id="logout">
                @yield('name')
            </div>
            <div class="chaomung">
                <a href="{{url('/home')}}">
                <img src="{{ url('/dautruong100.png') }}" width="50%"></a>
                
            </div>
        </div>
        
    </nav>
    <nav class="navbar navbar-expand-md navbar-light ">
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
            @guest
            @else 
                @if ( Auth::user()->admin == 1)
                    <li class="nav-item"><a class="btn btn-danger" href="{{ url('/admincontest') }}">Vào đấu trường</a></li>
                    <li class="nav-item"><a class="btn btn-info" href="{{ url('/statistic') }}">Thống kê</a></li>
                    <li class="nav-item"><a class="btn btn-info" href="{{ url('/history') }}">Lịch sử</a></li>
                @endif
                <a class="btn btn-danger" href="{{ route('logout') }}"><strong>{!!Auth::user()->username!!} Đăng Xuất</strong></a>
            @endguest
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>


<div class="logowecode">
    <img src="{{ url('/logowecode.svg') }}" height="100%" width="100%">
</div>
    <!-- Scripts -->
<script src="{{ url('/js/popper.min.js')}}"></script>
<script src="{{ url('/js/bootstrap.min.js')}}"></script>
</body>
</html>