@extends ('layouts.app')
@section('title', 'Featured Book')
@section('content')

    <h1>Featured Book</h1>
    <p>Title: {{ $book['title'] }}</p>
    <p>Author: {{ $book['author'] }}</p>
    <p>Year: {{ $book['year'] }}</p>
    <p>Genre: {{ $book['genre'] }}</p>
    <a href="{{ route('books.index') }}">Back to list</a>

@endsection

