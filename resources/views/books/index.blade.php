@extends('layout')
@section('title')
All Books
@endsection
@section('content')
<h1>All Books</h1>
<a href="{{route('books.create')}}" class="btn btn-primary">Create new book</a>
<br>
<br>
@foreach($books as $book)
<div class="card" style="width: 25rem;">
    <!--<img src="..." class="card-img-top" alt="...">-->
    <div class="card-body">
      <h2 class="card-title">{{$book->title}}</h2>
      <p class="card-text">{{$book->desc}}</p>
      <a href="{{route('books.show',$book->id)}}" class="btn btn-info">View Book</a>
      <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Edit Book</a>
      <a href="{{route('books.delete',$book->id)}}" class="btn btn-danger">Delete Book</a>
    </div>
  </div>
@endforeach
<br>
{{$books->render()}}
@endsection
