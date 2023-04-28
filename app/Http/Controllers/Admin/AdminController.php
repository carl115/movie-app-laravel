<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function users()
    {
        return view('admin.users.index');
    }

    public function movies()
    {
        return view('admin.movies.index');
    }

    public function categories()
    {
        return view('admin.categories.index');
    }
}
