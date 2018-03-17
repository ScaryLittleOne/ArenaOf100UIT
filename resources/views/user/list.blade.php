@extends('layouts.app')
@section('title','users')
<!-- 
@section('name')

@stop
!-->
@section('style')
#info-list {
                margin-top:20px;
                text-align: center;
                margin-left: 50px;
                margin-right: 50px;
            }
            #info-list table tr th{
                margin: 0px 0px;
                padding: 5px 5px;
                border: thin solid #ccc;

            }
            #info-list tbody tr td{
                margin: 0px 0px;
                padding: 5px 5px;
                border: thin solid #ccc;
            }
            #info-list table{
                border-collapse: collapse;
                width: 100%;
                background: #12B8B6;
            }
            #info-list tbody form a {
                font-size: 100%;
                text-decoration: none;
                background: white;
                color: red;
                display: inline-block;
                text-align: center;
                padding: 2px 10px;
                
            }
            #info-list tbody form button {
                font-size: 80%;
                text-decoration: none;
                background: #F3F3F3;
                color: red;
                padding: 2px 7px;
                text-align: center;
            }
            #info-list table tr th {
                background: #E2E2E2;
                
            }
            .login-button {
            display: block;
            width: 30px;
            padding: 10px;
            background: #fff;
            text-align: center;
            color: #008fb3;
            text-decoration: none;
            text-transform: capitalize;
            font-family: Tahoma;
            font-size: 13px;
        }

        .wrapper {
            z-index: 2;
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0,0,0,0.5);
        }

        .active {
            display: block !important;
        }

        .wrapper>.popup {
            width: 30%;
            background: #fff;
            margin: 100px auto;
            padding: 10px 10px;
            text-align:center;
        }

        .wrapper>.popup>.text-right {
            text-align: right;
        }

        .wrapper>.popup .close-button {
            display: inline-block;
            padding: 5px 5px;
            background: rgba(150,0,0,0.8);
            color: #fff;
            text-decoration: none;
            font-family: Tahoma;
            font-size: 13px;
            width: 50px;
            text-align: center;
        }

        .wrapper>.popup form>div {
            margin-top: 10px;
            margin-bottom: 5px;
            text-align: right;
        }
       
        .adduser a{
            padding: 10px 10px;
            color: #fff;
            background: #226EE9;
            font-size: 100%;
            width: 100%;
            text-align: right;
    }
        .adduser {
        margin-left:5%;
    }

@stop
@section('content')
 
   
    <div class="wrapper">
        <div class="popup">
            <div class="text-right"><a href="javascript:;" class="close-button">Thoát</a></div>
            <form>
                Bạn muốn xóa sinh viên này ra khỏi danh sách?
                <div>
                    <button type="submit">Có</button>
                </div>
            </form>
        </div>
    </div>

<div class="adduser">
    <a   href="{{route('users.create')}}" > Thêm user </a>
</div>


</div>
        <div>
            <div id="info-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th height="8%" width="8%">STT</th>
                                        <th height="20%" width="20%">MSSV</th>
                                        <th>Họ và tên</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php

                                            function showacc($x,$k)
                                            
                                        {

                                        ?>  
                                            
                                            <tr>
                                                <td>
                                                    <?php echo ($k); ?> 
                                                </td>
                                            <td>
                                            <?php echo ($x->id); ?> </td>
                                    
                                            <td><?php echo ($x->username); ?> </td>
                                            <td>
                                        <form action="">
                                                <a class="login-button" href="javascript:;" > X </a>
                                        </form>
                                        </td>
                                        </tr><?php

                                    }?>
                                        <php>   
                                            <?php for ($x=0 ; $x<100 ; $x++) {?>

                                            @foreach($users as $user)
                                                    <?php 
                                                        showacc($user,$x);

                                                    ?>
                                            @endforeach
                                            <?php  } ?>

                                        </php>          
                                        
                                    </tr>
                                
                                </tbody>
                            </table>
                        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".login-button").click(function(e){
                e.preventDefault();
                $(".wrapper").addClass("active");

            })
            $(".close-button").click(function(e){
                e.preventDefault();
                $(".wrapper").removeClass("active");
            })
        }); 
    </script>
@stop