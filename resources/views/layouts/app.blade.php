
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>UIT 100 | @yield('title')</title>
    <link rel="shortcut icon" href="{{ url('/icon.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
    .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            body {
            background-color: #00a5ff;
            background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%234acaf7' fill-opacity='0.58' fill-rule='evenodd'/%3E%3C/svg%3E");
            }
            #logout {
                text-align: right;
<<<<<<< HEAD
                left: 30px;
                top: 5px;
                position: fixed;

            }

            .chaomung{
                margin-top: 25px;
=======
                right: 20px;
                top: 5px;
                position: absolute;
            }

            #logout a{
                font-size: 100%;
                text-decoration: none;
                border-radius: 5px; 
                background: #F3F3F3;
                color: #555555;
                display: inline-block;
                text-align: center;
                padding: 2px 10px;
                

>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
            }
        @yield('style')
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light ">
            <div class="container">
                <div class="flex-center position-ref full-height">
<<<<<<< HEAD
                    <div id="logout">
                        @yield('name')
                    </div>
            <div class="chaomung">

                    <a  href="{{url('/')}}" target="_self"><img src="{{ url('/dautruong100.png') }}" height="70%" width="70%"></a>
                    
            </div>
        </div>

=======
            <div class="chaomung">
                    <a  href="{{url('/')}}" target="_self"><img src="{{ url('/dautruong100.png') }}" height="70%" width="70%"></a>
                    <div id="logout">
                        @yield('name') 
                    </div>
            </div>
        </div>

>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
               
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}" target="_self">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}" target="_self">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}">
        
    </script>
</body>
</html>