@extends('layouts.app')

@section('title', 'My Movie List')

@section('content')
    <div class="card">
        <div class="card-body">
            <p>
                Genre:
                <a href="{{ route('movies.index', ['genre' => 'all', 'year' => $year]) }}">All</a>
                <a href="{{ route('movies.index', ['genre' => 'Action', 'year' => $year]) }}">Action</a>
            </p>

            <p>
                Year:
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => 'all']) }}">All</a>
                <a href="{{ route('movies.index', ['genre' => $genre, 'year' => 2020]) }}">2020</a>
            </p>

            <a href="{{ route('movies.index') }}">Clear filters</a>

            <p>
                Showing:
                genre = {{ $genre }}, year = {{ $year }}
            </p>

            <table class="table table-bordered table-striped" border="1" cellpadding="5" cellspacing="8">
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Year</th>
                </tr>

                @foreach ($movies as $movie)
                    <tr>
                        <td><a href="{{ route('movies.show', $movie['id']) }}">{{ $movie['title'] }}</a></td>
                        <td>{{ $movie['genre'] }}</td>
                        <td>{{ $movie['rating'] }}</td>
                        <td>{{ $movie['year'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection