<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StarController extends Controller
{
    public function getStars()
    {
        return 'Stars';
    }

    public function getStar()
    {
        return 'Star';
    }

    public function create()
    {
        return 'Create star';
    }

    public function update()
    {
        return 'Update star';
    }

    public function delete()
    {
        return 'Delete star';
    }
}
