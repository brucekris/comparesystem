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
         * {
         box-sizing: border-box;
         }
         #myInput {
         background-position: 10px 10px;
         background-repeat: no-repeat;
         width: 100%;
         font-size: 16px;
         padding: 12px 20px 12px 40px;
         border: 1px solid #ddd;
         margin-bottom: 12px;
         }
         #myTable {
         border-collapse: collapse;
         width: 100%;
         float:left;
         border: 1px solid #ddd;
         font-size: 18px;
         }
         #myTable th, #myTable td {
         text-align: left;
         padding: 12px;
         }
         #myTable tr {
         border-bottom: 1px solid #ddd;
         }
         #myTable tr.header, #myTable tr:hover {
         background-color: #f1f1f1;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row">
            @if(session()->get('success'))
            <div class="alert alert-success">
               {{ session()->get('success') }}  
            </div>
            <br />
            @endif
            <h1>Select Phone</h1>
            <br><br>
            <input type="text"  id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
            <table id="myTable" class="col-sm">
               <tr class="header">
                  <th style="width:60%;">Phone 1</th>
               </tr>
               <tr>
                  @foreach($books as $book)
                  <td>
                     <a href="{{ route('books.show', ['id' => $book->id]) }}" class="getBook">
                     {{$book->phone_name}}
                     </a>
                  </td>
               </tr>
               @endforeach
            </table>
            <table id="myTable" class="col-sm">
               <tr class="header">
                  <th style="width:60%;">Phone 2</th>
               </tr>
               <tr>
                  @foreach($books as $book)
                  <td>
                     <a href="{{ route('books.show', ['id' => $book->id]) }}" class="getBook1">
                     {{$book->phone_name}}
                     </a>
                  </td>
               </tr>
               @endforeach
            </table>
            
            <br><br>
            <tr id="">
               <td>
                  <div id="product_info" class="col-sm">
                     <!-- ajax data inladen -->
                  </div>
               </td>
            </tr>
            <tr id="">
               <td>
                  <div id="product_info1" class="col-sm">
                     <!-- ajax data inladen -->
                  </div>
               </td>
            </tr>
         </div>
      </div>
      <script>
         function myFunction() {
           var input, filter, table, tr, td, i, txtValue;
           input = document.getElementById("myInput");
           filter = input.value.toUpperCase();
           table = document.getElementById("myTable");
           tr = table.getElementsByTagName("tr");
           for (i = 0; i < tr.length; i++) {
             td = tr[i].getElementsByTagName("td")[0];
             if (td) {
               txtValue = td.textContent || td.innerText;
               if (txtValue.toUpperCase().indexOf(filter) > -1) {
                 tr[i].style.display = "";
               } else {
                 tr[i].style.display = "none";
               }
             }       
           }
         }
      </script>
   </body>
</html>
@endsection