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
<div>
<br>
<br>
<div class="container text-center">    
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="../public/images/user1.png" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">Interests</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>Tip!</strong></p>
        People are looking at your profile. Find out who.
      </div>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
                {{-- <p contenteditable="true">Current phone: Samsung S10</p> --}}
              <b><p>Favorite Phone:</p></b><br>
               Samsung S10
              <img src="../public/images/galaxys10.png" class="img-circle" height="55" width="55" alt="Avatar">
                <a href="{{ route('phonedata')}}" class="glyphicon glyphicon-pencil btn btn-primary">Edit</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Name:</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Email</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bio:</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>lol</p>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Favourite phones:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>


</body>
</html>

@endsection
