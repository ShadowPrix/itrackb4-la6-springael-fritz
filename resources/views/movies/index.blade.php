@extends('layouts.app')

@section('title', 'My Movie List')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>

        @foreach ($movies as $movie)
         <tr>
            <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
            <td>{{ $movie['genre'] }}</td>
            <td>{{ $movie['rating'] }}</td>
         </tr>
        @endforeach
    </table>
@endsection