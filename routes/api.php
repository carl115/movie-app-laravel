<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StarController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => '/users', 'controller' => UserController::class],
    function () {
        Route::get('/{user}', 'getUser');
    }
);

Route::group(
    ['prefix' => '/categories', 'controller' => CategoryController::class],function () {
        Route::get('/', 'getCategoriesMovies');
        Route::get('/{category}', 'getCategoryMovies');
        Route::post('/', 'create');
        Route::put('/{category}', 'update');
        Route::delete('/{category}', 'delete');
    }
);

Route::group(
    ['prefix' => '/movies', 'controller' => MovieController::class],function () {
        Route::get('/', 'getMovies');
        Route::get('/{movie}', 'getMovie');
        Route::post('/', 'create');
        Route::put('/{movie}', 'update');
        Route::delete('/{movie}', 'delete');
    }
);

Route::group(
    ['prefix' => '/stars', 'controller' => StarController::class],
    function () {
        //Route::get('/', 'getStars');
        //Route::get('/{star}', 'getStar');
        Route::post('/', 'create');
        Route::put('/{star}', 'update');
        Route::delete('/{star}', 'delete');
    }
);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});