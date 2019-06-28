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
              <label for="price">Comment :</label>
              <input type="text" class="form-control" name="description" value="{{$book->description}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Book</button>
      </form>
  </div>
</div>
@endsection