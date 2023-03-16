@extends('layout')
@section('content')
<h1 style="color:red;">Book Id: {{$book->id}}</h1>
<h2>{{$book->title}}</h2>
<p>{{$book->desc}}</p>
<hr>
<a href="{{route('books.index')}}">Back</a>
@endsection
