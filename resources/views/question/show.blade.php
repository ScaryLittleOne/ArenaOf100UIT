@extends('layouts.app')
@section('title',' ')
@section('content')
<div class="dropdown mb-4">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quản Trị Viên
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{url('/showusers')}}">Thống kê người chơi</a>
            <a class="dropdown-item" href="{{ route('questions.create') }}">Thêm Câu Hỏi</a>
            <a class="dropdown-item" href="{{route('users.create')}}">Thêm Sinh Viên</a>
            <a class="dropdown-item" href="{{url('/questions')}}">Quản Lí Đề Thi</a>
            <a class="dropdown-item" href="{{url('/users')}}" > Quản Lí Sinh Viên </a>
        </div>
</div>
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header">{{ __('Chi Tiết Câu Hỏi Và Đáp Án') }}</div>
   
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     
            <div class="w3-panel w3-round w3-teal">
              <li> Số Thứ Tự : {!! $question->id !!} </li>
            </div>
            <div class="w3-panel w3-round w3-teal">
              <li> Nội Dung : {!! $question->content !!} </li>
            </div>
       

            <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                   <th>Số Thứ Tự</th>
                   <th>Cách Hiển Thị Đáp Án</th>
                   <th>Nội Dung</th>
                   <th>Là Đáp Án Đúng (0: Sai; 1:Đúng)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $k=0 ?>
                  @foreach($answers as $answer)
                    <?php $k++ ?>
                    <tr>
                    <td> {!!$k!!}  </td>
                    <td>{!! $answer->abcd !!}</td>
                    <td>{!! $answer->content !!}</td>
                    <td>{!! $answer->correct !!}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          <!-- O day Nua-->
          </div>
        </div>
@endsection
<!--Toi Day-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --><!-- 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>