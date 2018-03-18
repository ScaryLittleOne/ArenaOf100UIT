<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UIT 100 | @yield('title')</title>
        <link rel="shortcut icon" href="{{ url('/icon.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>

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
                right: 20px;
                top: 20px;
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
                

            }
            @yield('style')
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="chaomung">
                    <img src="{{ url('/dautruong100.png') }}" height="35%" width="35%">
                    <div id="logout">
                        @yield('name')
                        <a target="_blank" href='/'>
                            Đăng xuất
                        </a> 
                    </div>
            </div>
        </div>
        @yield('main')
    </body>
</html>
