@extends('layouts.app')
@section('title', 'My Book List')
@section('content')
    <h3>My Book List</h3>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Remarks</th>
        </tr>

        @forelse ($books as $id => $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="{{ route('books.show', ['id' => $id]) }}">{{ $book['title'] }}</a></td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
                <td>{{ $book['genre'] }}</td>
                @if($book['year'] >= 2026)
                    <td><strong>NEW!</strong></td>
                @else
                    <td><strong>OLD!</strong></td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="6">Sorry, no books found =(</td>
            </tr>
        @endforelse

    </table>


@endsection
