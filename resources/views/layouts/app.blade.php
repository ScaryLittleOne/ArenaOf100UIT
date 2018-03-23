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
    <style type="text/css">
    .title {
                font-size: 84px;
            }

            body {
            background-color: #ab0000;
background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%23ffeb23' fill-opacity='0.28' fill-rule='evenodd'/%3E%3C/svg%3E");
            }

            .chaomung{
                margin-top: 25px;
            }
            .logowecode{
                position: fixed;
                right: 10px;
                bottom: 10px;
                height: 50px;
                width: 60px;
            
            }

        @yield('style')
    </style>
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