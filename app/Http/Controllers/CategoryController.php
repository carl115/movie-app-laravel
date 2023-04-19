<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*
    public function getCategories()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }
    */

    public function getCategoriesMovies()
    {
        $categories = Category::all()->load('movies');
        return response()->json($categories, 200);
    }

    /*
    public function getCategory(Category $category)
    {
        return response()->json($category, 200);
    }
    */

    public function getCategoryMovies(Category $category)
    {
        return response()->json($category->load('movies'), 200);
    }

    public function create(CategoryRequest $request)
    {
        try {
            Category::create($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Category created successfully'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 500);
        }
    }

    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $category->update($request->all());
            return response()->json([
                'success' => true,
                'message' => 'Category updated successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 500);
        }
    }

    public function delete(Category $category)
    {
        try {
            $category->delete();
            return response()->json([
                'success' => true,
                'message' => 'Category deleted successfully'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th
            ], 500);
        }
    }
}
