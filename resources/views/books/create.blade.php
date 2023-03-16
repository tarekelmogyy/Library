@extends('layout')
@section('title')
    Create Book
@endsection
@section('content')
<form method="POST" action="{{route('books.store')}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title">
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <input type="text" name="desc" class="form-control" placeholder="Description">
    </div>
    <button type="submit" class="btn btn-dark">Create</button>
  </form>
@endsection
