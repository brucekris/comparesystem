@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Phone
    <button class="btn btn-danger float-right"><a href="{{ url('/books') }}">Back</a></button>
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
      <form method="post" action="{{ route('books.store') }}">
          <div class="form-group">
              @csrf
              <label for="phone_name">Phone Name:</label>
              <input type="text" class="form-control" name="phone_name"/>
          </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="price">Price :</label>
              <input type="text" class="form-control" name="price"/>
          </div>
          <div class="form-group">
              <label for="display">Display :</label>
              <input type="text" class="form-control" name="display"/>
          </div>
          <div class="form-group">
              <label for="battery">Battery :</label>
              <input type="text" class="form-control" name="battery"/>
          </div>
          <div class="form-group">
              <label for="storage">Storage :</label>
              <input type="text" class="form-control" name="storage"/>
          </div>
          <div class="form-group">
              <label for="processor">Processor :</label>
              <input type="text" class="form-control" name="processor"/>
          </div>
          <div class="form-group">
              <label for="camera">Camera :</label>
              <input type="text" class="form-control" name="camera"/>
          </div>
          <div class="form-group">
              <label for="network">Network :</label>
              <input type="text" class="form-control" name="network"/>
          </div>
          <div class="form-group">
              <label for="waterproof">Waterproof :</label>
              <input type="text" class="form-control" name="waterproof"/>
          </div>
          <button type="submit" class="btn btn-primary">Create Phone</button>
      </form>
  </div>
</div>
@endsection