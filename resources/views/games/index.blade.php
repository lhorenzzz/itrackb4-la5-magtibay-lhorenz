@extends('layouts.app')
@section('title', 'Games List')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Genre</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($games as $game)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <a href="{{ route('games.show', $game['id']) }}">
                        {{ $game['name'] }}
                    </a>
                </td>
                <td>{{ $game['genre'] }}</td>
            </tr>
        @empty
            <tr><td colspan="3">No games found.</td></tr>
        @endforelse
    </table>
@endsection
