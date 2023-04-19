<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all()->load('category', 'stars');
        return view('index', compact('movies'));
    }

    public function getMovies()
    {
        $movies = Movie::all();
        return response()->json($movies->load('category', 'stars'), 200);
    }

    public function getMovie(Movie $movie)
    {
        return response()->json($movie->load('category', 'stars'), 200);
    }

    public function create(MovieRequest $request)
    {
        Movie::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Movie created successfully'
        ], 201);
    }

    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Movie updated successfully'
        ], 200);
    }

    public function delete(Movie $movie)
    {
        $movie->delete();
        return response()->json([
            'success' => true,
            'message' => 'Movie deleted successfully'
        ], 200);
    }
}
