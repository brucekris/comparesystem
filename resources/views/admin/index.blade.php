@extends('layouts.admin')


@section('content')


<a href="{{ route('admin.pages.create') }}" class="btn btn-success float-right">Create</a>

<h1>Pages overview</h1>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Active</th>
            <th>Created</th>
            <th>Options</th>
        </tr>
    </thead></table>




@stop
