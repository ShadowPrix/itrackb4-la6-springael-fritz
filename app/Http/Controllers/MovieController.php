<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    private function getMovies()
    {
        return [
            1 => ['id' => 1, 'title' => 'Spiderman', 'genre' => 'Action', 'rating' => 9.1],
            2 => ['id' => 2, 'title' => 'Gagamboy', 'genre' => 'Comedy', 'rating' => 8.5],
            3 => ['id' => 3, 'title' => 'Harry Potter', 'genre' => 'Drama', 'rating' => 9.7],
            4 => ['id' => 4, 'title' => 'Grown Ups', 'genre' => 'Comedy', 'rating' => 8.6],
            5 => ['id' => 5, 'title' => 'Grown Ups 2', 'genre' => 'Comedy', 'rating' => 8.9],
            6 => ['id' => 6, 'title' => 'Interstellar', 'genre' => 'Drama', 'rating' => 9.3],
        ];
    }

    public function featured()
    {
    $movies = $this->getMovies();
    $movie = $movies[3]; // Harry Potter — your featured pick, change the 3 if you want a different one

    return view('movies.show', ['movie' => $movie]);
    }

    public function filter($value = null)
    {
    $movies = $this->getMovies();

    if ($value === null) {
        $filtered = $movies;
    } else {
        $filtered = [];
        foreach ($movies as $movie) {
            if ($movie['genre'] === $value) {
                $filtered[] = $movie;
            }
        }
    }

    return view('movies.filter', ['movies' => $filtered, 'activeFilter' => $value]);
    }

    public function index()
    {
        $movies = $this->getMovies();
        return view('movies.index', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movies = $this->getMovies();

        if (!isset($movies[$id])) {
            abort(404);
        }

        $movie = $movies[$id];

        return view('movies.show', ['movie' => $movie]);
    }
}