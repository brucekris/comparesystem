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
      background-image: url("../public/images/sand.jpg");
      } 
  </style>
</head>
<body>
<div></div>
<div>
Select Brand
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col"><h1>Phone</h1></th>
      <th scope="col">Phone 1</th>
      <th scope="col">Phone 2</th>
      <th scope="col">Phone 3</th>
      <th scope="col">Phone 4</th>
      <th scope="col">Result?</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Price</th>
      <td>$100</td>
      <td>$499</td>
      <td>$299</td>
      <td>$1000</td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row">Display</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Memory</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Battery</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">Sound</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>

  </tbody>
</table>
</div>
</div>


</body>
</html>

@endsection
