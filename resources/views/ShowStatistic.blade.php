@extends('layouts.app')
@section('title','Thống kê')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class="container">
  <h2 style="color: white">Thống kê kết quả câu hỏi</h2>
  <table class="table table-striped table-bordered" style="margin-top: 15px; background: white;">
    <thead>
      <tr>
        <th>Câu trả lời</th>
        <th>Số người chọn</th>
      </tr>
    </thead>
    <tbody>   
      <tr class="success">
        <td>A</td>
        <td>{!!$A!!}</td>
      </tr>
      <tr class="danger">
        <td>B</td>
        <td>{!!$B!!}</td>
      </tr>
      <tr class="info">
        <td>C</td>
        <td>{!!$C!!}</td>
      </tr>
      <tr class="warning">
        <td>D</td>
        <td>{!!$D!!}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
