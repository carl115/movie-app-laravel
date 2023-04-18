<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getMovies()
    {
        return 'Movies';
    }

    public function getMovie()
    {
        return 'Movie';
    }

    public function create()
    {
        return 'Create movie';
    }

    public function update()
    {
        return 'Update movie';
    }

    public function delete()
    {
        return 'Delete movie';
    }
}
