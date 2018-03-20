@extends('layouts.app')
@section('title','Danh sách sinh viên')
<!-- 
@section('name')

@stop
!-->
@section('style')


@stop
@section('content')
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản trị viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{route('users.create')}}">Thêm sinh viên</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="/questions" > Quản lí đề thi </a>
  <a class="dropdown-item" href="/contest" > Vào đấu trường </a>
  
</div>
</div>

        <div class="row">
            <div class="col-12">
                            <table class="table table-striped table-light ">
                                <thead class="thead-light">
                                    <tr>
                                        <th height="4%" width="4%">STT</th>
                                        <th height="30%" width="30%">Mã số sinh viên</th>
                                    
                                        <th height="20%" width="20%">Thao tác</th>
                                    </tr>
                                </thead>
                                    <tr>
                                <tbody>
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
    <script src="{{ asset('js/app.js') }}">
    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
@stop