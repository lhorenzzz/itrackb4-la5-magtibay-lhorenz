@extends('layouts.app')
@section('title', $book['title'])
@section('content')

    <h1>{{ $book['title'] }}</h1>
    <p>Author: {{ $book['author'] }}</p>
    <p>Year: {{ $book['year'] }}</p>
    <p>Genre: {{ $book['genre'] }}</p>

    <a href="{{ route('books.index') }}">Back to list</a>

@endsection
