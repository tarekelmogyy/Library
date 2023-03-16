@extends('layout')
@section('title')
    Edit Book
@endsection
@section('content')
<form method="POST" action="{{route('books.update', $book->id)}}">
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control" value="{{$book->title}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <input type="text" name="desc" class="form-control" value="{{$book->desc}}">
    </div>
    <button type="submit" class="btn btn-dark">Update</button>
  </form>
@endsection
