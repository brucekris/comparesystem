
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .content {
                text-align: center;
            }
    body {
      background-image: url("../public/images/galaxys.jpg");
      } 
  </style>
</head>
<body>
<div></div>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td><b>Phone</b></td>
          <td>Review</td>
          <td>Place a Review!</td>
          <td>Favourite Phone!</td>
        </tr>
    </thead>
    <tbody>
       
        @foreach($books as $book)

        <tr>
            <td>{{$book->phone_name}}</td>
            <td>{{$book->description}}</td>
            <td><a href="{{ route('books.edit',$book->id)}}" class="glyphicon glyphicon-comment btn btn-primary"> Review</a></td>
            <td><a href="{{ route('home')}}" class="glyphicon glyphicon-heart btn btn-danger"> Favourite</a></td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
<div>
<div>
</div>
</div>


</body>
</html>

@endsection
