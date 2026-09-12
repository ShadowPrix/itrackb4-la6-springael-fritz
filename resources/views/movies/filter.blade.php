@extends('layouts.app')

@section('title', 'Filtered Movies')

@section('content')
    @if ($activeFilter === null)
        <p>Showing: All movies</p>
    @else
        <p>Showing: {{ $activeFilter }}</p>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th></th>
                </tr>
                @forelse ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $movie['title'] }}</td>
                    <td>{{ $movie['genre'] }}</td>
                    <td>{{ $movie['rating'] }}</td>
                    @if ($movie['rating'] >= 9.0)
                        <td>⭐ Top Rated</td>
                    @else
                        <td></td>
                    @endif
                </tr>
                @empty
                    <p>No movies match that filter.</p>
                @endforelse
            </table>
        </div>
    </div>

    <p class="mt-3"><a href="{{ route('movies.index') }}" class="btn btn-primary">Back to list</a></p>
@endsection