<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StarController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => '/categories', 'controller' => CategoryController::class],function () {
        Route::get('/', 'getCategories');
        Route::get('/{id}', 'getCategory');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    }
);

Route::group(
    ['prefix' => '/movies', 'controller' => MovieController::class],function () {
        Route::get('/', 'getMovies');
        Route::get('/{id}', 'getMovie');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    }
);

Route::group(
    ['prefix' => '/stars', 'controller' => StarController::class],function () {
        Route::get('/', 'getStars');
        Route::get('/{id}', 'getStar');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    }
);

Route::group(
    ['prefix' => '/videos', 'controller' => VideoController::class],function () {
        Route::get('/', 'getVideos');
        Route::get('/{id}', 'getVideo');
        Route::post('/', 'create');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'delete');
    }
);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});