@extends('layouts.app')
@section('title','Lịch Sử Cuộc Thi')
@section('content')
<link href="{{ url('css/jquery.dataTables.min.css') }}" rel="stylesheet">
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
<div class="row justify-content-center">
  <div class="col">
    <div class="card">
      <div class="card-header">{{ __('Chi Tiết Lịch Sử Các Cuộc Thi') }}</div>
      <table id="LichSu" class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>TT Contest</th>
            <th>MSSV</th>
            <th>Câu Hỏi</th>
            <th>Trả Lời</th>
            <th>modified</th>
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
    </div>
  </div>
</div>


<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>

  var table = $("#LichSu").dataTable();

</script>
@endsection   
