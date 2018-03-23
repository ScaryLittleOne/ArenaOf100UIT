<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>UIT | @yield('title')</title>
    <link rel="shortcut icon" href="{{ url('/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('/layout.css')}}">

        @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light ">
            
            <div class="flex-center position-ref full-height">
                <div id="logout">
                    @yield('name')
                </div>
                <div class="chaomung">
                        <img src="{{ url('/dautruong100.png') }}" height="50%" width="50%">
                </div>
            </div>

               
            <!-- Left Side Of Navbar -->
            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @guest
                @else 
                    @if ( Auth::user()->admin == 1)
                        <li class="nav-item"><a class="btn btn-info" href="{{ url('/admincontest') }}">Vào đấu trường</a></li>
                        <li class="nav-item"><a class="btn btn-info" href="{{ url('/statistic') }}">Thống kê</a></li>
                        <li class="nav-item"><a class="btn btn-info" href="{{ url('/history') }}">Lịch sử</a></li>
                    @endif
                    <a class="btn btn-danger" href="{{ route('logout') }}"><strong>Đăng Xuất</strong></a>
                @endguest
            </ul>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

<div class="logowecode">
<img src="{{ url('/logowecode.svg') }}" height="100%" width="100%">
</div>
    <!-- Scripts -->
    
</body>
</html>