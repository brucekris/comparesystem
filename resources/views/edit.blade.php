@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('books.update', $book->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Phone Name :</label>
              <input type="text" class="form-control" name="phone_name" value="{{$book->phone_name}}"/>
          </div>
          <div class="form-group">
              <label for="price">Review :</label>
              <input type="text" class="form-control" name="description" value="{{$book->description}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Price :</label>
              <input type="text" class="form-control" name="price" value="{{$book->price}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Display :</label>
              <input type="text" class="form-control" name="display" value="{{$book->display}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Battery :</label>
              <input type="text" class="form-control" name="battery" value="{{$book->battery}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Storage :</label>
              <input type="text" class="form-control" name="storage" value="{{$book->storage}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Camera :</label>
              <input type="text" class="form-control" name="camera" value="{{$book->camera}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Network :</label>
              <input type="text" class="form-control" name="network" value="{{$book->network}}"/>
          </div>
           <div class="form-group">
              <label for="quantity">Waterproof :</label>
              <input type="text" class="form-control" name="waterproof" value="{{$book->waterproof}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Book</button>
      </form>
  </div>
</div>
@endsection