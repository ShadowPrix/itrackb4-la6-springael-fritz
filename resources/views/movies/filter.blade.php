<!DOCTYPE html>
<html>
<head>
    <title>Filtered Movies</title>
</head>
<body>
    <h1>Filtered Movies</h1>

    <p>Prepared by: Fritz C. Springael</p>

    @if ($activeFilter === null)
        <p>Showing: All movies</p>
    @else
        <p>Showing: {{ $activeFilter }}</p>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['genre'] }}</td>
            <td>{{ $movie['rating'] }}</td>
        </tr>
        @endforeach
    </table>

    <p><a href="{{ route('movies.index') }}">Back to list</a></p>
</body>
</html>