<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>

    <p>Prepared by: Fritz C. Springael</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $movie['title'] }}</td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>{{ $movie['genre'] }}</td>
        </tr>
        <tr>
            <td>Rating</td>
            <td>{{ $movie['rating'] }}</td>
        </tr>
    </table>

    <p><a href="{{ route('movies.index') }}">Back to list</a></p>
</body>
</html>