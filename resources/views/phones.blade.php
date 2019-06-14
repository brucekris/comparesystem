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
      </div>
      <br />
      @endif
      <h1>Select Phones</h1>
      <br><br>
      <table class="table table-striped">
         <select>
            @foreach($books as $book)
            <option>{{$book->phone_name}}</option>
            @endforeach
         </select>
      </table>
      <div>
         <div></div>
      </div>
   </body>
</html>
@endsection