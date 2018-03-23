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


        <!-- Fonts -->


        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;

                right: 10px;
                top: 18px;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 10px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
            body {
            background-color: #ab0000;
background-image: url("data:image/svg+xml,%3Csvg width='64' height='64' viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zm33.414-6l5.95-5.95L45.95.636 40 6.586 34.05.636 32.636 2.05 38.586 8l-5.95 5.95 1.414 1.414L40 9.414l5.95 5.95 1.414-1.414L41.414 8zM40 48c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zm0-2c3.314 0 6-2.686 6-6s-2.686-6-6-6-6 2.686-6 6 2.686 6 6 6zM9.414 40l5.95-5.95-1.414-1.414L8 38.586l-5.95-5.95L.636 34.05 6.586 40l-5.95 5.95 1.414 1.414L8 41.414l5.95 5.95 1.414-1.414L9.414 40z' fill='%23ffeb23' fill-opacity='0.28' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        #chaomung p{
            font-family: cursive;
            color: white;
            font-size: 20px;
        }
        #logouit {
            position: fixed;
            top: 10px; 
            left: 10px;
            display: inline-block;
           
        }
        .logowecode{
                position: fixed;
                right: 10px;
                bottom: 10px;
                height: 50px;
                width: 60px;
            
            }
        </style>
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
    </div>
    <div class="logowecode">
<img src="{{ url('/logowecode.svg') }}" height="100%" width="100%">
</div>
    </body>
</html>
