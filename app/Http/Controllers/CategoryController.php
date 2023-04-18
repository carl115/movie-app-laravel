<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();
        //dd($categories);
        return response()->json($categories->load('movie'), 200);
    }

    public function getCategory()
    {
        return 'Category';
    }

    public function create()
    {
        return 'Create category';
    }

    public function update()
    {
        return 'Update category';
    }

    public function delete()
    {
        return 'Delete category';
    }
}
