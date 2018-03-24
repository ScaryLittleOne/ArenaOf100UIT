@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
<div class="dropdown mb-4">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Quản Trị Viên
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{ url('/statistic') }}" > Thống Kê Đáp Án </a>
  <a class="dropdown-item" href="{{ url('/admincontest') }}" > Vào Đấu Trường </a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="{{url('/users')}}">Quản Lí Sinh Viên</a>
  <a class="dropdown-item" href="{{url('/questions')}}" > Quản Lí Đề Thi </a>
</div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Chi Tiết Lịch Sử Các Cuộc Thi') }}</div>

            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

            <table id="LichSu" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                   <th>Số Thứ Tự</th>
                   <th>Thứ Tự Cuộc Thi</th>
                   <th>MSSV Của Người Chơi</th>
                   <th>Câu Hỏi</th>
                   <th>Câu Trả Lời</th>
                   <th>Cập nhật lần cuối</th>
                  </tr>
                </thead>
                <tbody>
{{-- 

                  @foreach($MergeHistory as $MH)

                    <tr>
                    <td> {!!$k!!}  </td>
                    <td>{!! $MH-> contest_id !!}</td>
                    <td>{!! $MH-> username !!}</td>
                    <td>{!! $MH-> QT !!}</td>
                    <td>{!! $MH-> abcd !!}</td>
                    </tr>
                  @endforeach
--}}
                    @foreach ($history as $ht)
                      <tr>
                        <td> {{ $loop->iteration }}  </td>
                      <td> {{ $ht->contest_id }}</td>
                      <td> {{ $ht->user->username }}</td>
                        <td>{{ $ht->question->content }}</td>
                      <td> {{ $ht->question_answer->abcd }}</td>
                      <td> {{ $ht->updated_at }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
              <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
              <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
              <script>
                $(function(){
                $("#LichSu").dataTable();
                })
              </script>
            </div>
          <!-- O day Nua-->
          </div>
          </div>
        </div>
    </div>
</div>
  
@endsection
<!--Toi Day-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>