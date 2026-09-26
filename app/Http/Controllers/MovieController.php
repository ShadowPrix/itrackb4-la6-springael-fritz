<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Spiderman', 'genre' => 'Action', 'rating' => 9.1, 'year' => 2002],
            2 => ['id' => 2, 'title' => 'Gagamboy', 'genre' => 'Comedy', 'rating' => 8.5, 'year' => 2010],
            3 => ['id' => 3, 'title' => 'Harry Potter', 'genre' => 'Drama', 'rating' => 9.7, 'year' => 2001],
            4 => ['id' => 4, 'title' => 'Grown Ups', 'genre' => 'Comedy', 'rating' => 8.6, 'year' => 2010],
            5 => ['id' => 5, 'title' => 'Grown Ups 2', 'genre' => 'Comedy', 'rating' => 8.9, 'year' => 2014],
            6 => ['id' => 6, 'title' => 'Interstellar', 'genre' => 'Drama', 'rating' => 9.3, 'year' => 2014],
        ];
    }

    public function index(Request $request)
    {
        $genre = $request->query('genre', 'all');
        $year = $request->query('year', 'all');

        $movies = $this->getMovies();

        if ($genre !== 'all') {
            $movies = array_filter($movies, fn($m) => $m['genre'] === $genre);
        }
        if ($year !== 'all') {
            $movies = array_filter($movies, fn($m) => $m['year'] == $year);
        }

        return view('movies.index', [
            'movies' => $movies,
            'genre' => $genre,
            'year' => $year,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $movies = $this->getMovies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];

        return view('movies.show', ['movie' => $movie]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $movies = $this->getMovies();
        $movie = $movies[3];

        return view('movies.show', ['movie' => $movie]);
    }
}
