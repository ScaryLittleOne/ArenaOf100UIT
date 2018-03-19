@extends('layouts.app')
@section('title','Users')
<!-- 
@section('name')

@stop
!-->
@section('style')

#info-list {

                margin-top:20px;
                text-align: center;
                margin-left: 10px;
                margin-right: 10px;
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
                background: white;
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

            border-radius: 10px; 
        }

        .wrapper>.popup>.text-right {


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
            text-align: center;

        }
        .wrapper>.popup button {
    
            width: 50px;
            background: #0083BF;
            box-shadow: 0px 0px 5px #CBCBCE;
            margin: 10px auto;
            padding: 2px 2px;
            border-radius: 10px; 
}
       
        .adduser a{
            padding: 10px 50px;

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

        }
        .adduser {
        margin-left:5%;
        }

            text-align: right;
    }
        .adduser {
        margin-left:5%;
    }


@stop
@section('content')

    <a style="position: absolute;left: 10px;" class="btn btn-light"  href="{{route('users.create')}}" > Thêm user </a>


</div>
        <div>
            <div id="info-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th height="8%" width="8%">STT</th>
                                        <th height="30%" width="30%">Mã số sinh viên</th>
                                    
                                        <th height="20%" width="20%">Thao tác</th>
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
                                            <td><?php echo ($x->username); ?> </td>
                                            <td>
                                            <div class="container">
                                                  <div class="row">
                                                    <div class="col-sm">
                                                      {!!Form::open(['method'=>'delete', 'route'=>['users.destroy', $x->id]]) !!}
                                                      <input class="btn btn-danger" onclick='return confirm("Do you want to delete this record?")' type="submit" value="Xóa">
                                                       </form>
                                                    </div>
                                                    <div class="col-sm">
                                                      <a href="{{ route('users.edit', $x->id) }}" class = "btn btn-success">Chỉnh sửa</a>
                                                    </div>
                                                  </div>
                                                </div>                                                    

                                                 
                                               
                                                     

                                        </td>
                                        </tr><?php

                                    }?>
                                        <php>   
                                           
                                            <?php $k=0 ?>    
                                            @foreach($users as $user)
                                            <?php $k++; ?>
                                                    <?php 
                                                        showacc($user,$k);

                                                    ?>
                                            @endforeach
                                           

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