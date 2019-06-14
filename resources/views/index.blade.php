
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
          <td>ID</td>
          <td>Phone Name</td>
          <td>Description Number</td>
          <td>Price</td>
          <td>Display</td>
          <td>Battery</td>
          <td>Storage</td>
          <td>Processor</td>
          <td>Camera</td>
          <td>Network</td>
          <td>Waterproof</td>
          <td colspan="2">Action</td>
          <td><button  class="btn btn-success"><a href="{{ url('/books/create') }}">Create</a></td></button>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->phone_name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->display}}</td>
            <td>{{$book->battery}}</td>
            <td>{{$book->storage}}</td>
            <td>{{$book->processor}}</td>
            <td>{{$book->camera}}</td>
            <td>{{$book->network}}</td>
            <td>{{$book->waterproof}}</td>
            <td><a href="{{ route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('books.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
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
