<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('products', \App\Http\Controllers\Api\ProductController::class)->except(['create', 'edit']);
Route::post('products/{id}/categories', [\App\Http\Controllers\Api\ProductController::class, 'updateCategories']);
Route::resource('categories', \App\Http\Controllers\Api\CategoryController::class)->except(['create', 'edit']);
Route::resource('users', \App\Http\Controllers\Api\UserController::class)->except(['create', 'edit']);

Route::get('spotify-test', [\App\Http\Controllers\SpotifyTestController::class, 'sandbox']);
Route::get('artisan-test', [\App\Http\Controllers\ArtisanExecutionTestController::class, 'sandbox']);

Route::resource('genres', \App\Http\Controllers\Api\GenreController::class)->only(['index', 'store']);
