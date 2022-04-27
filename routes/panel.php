<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//no-auth group
Route::middleware(['no-internet-explorer'])->name('panel.')->group(function (){
    Route::get('/', [\App\Http\Controllers\Panel\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', \App\Http\Controllers\Panel\ProductController::class)->except(['create', 'edit']);
    Route::post('products/{id}/categories', [\App\Http\Controllers\Panel\ProductController::class, 'updateCategories']);
    Route::resource('categories', \App\Http\Controllers\Panel\CategoryController::class)->except(['create', 'edit']);
    Route::resource('users', \App\Http\Controllers\Panel\UserController::class)->except(['create', 'edit']);
//    Route::resource('companies', \App\Http\Controllers\Panel\CompanyController::class, ['except' => ['show']]);
});

//auth group
Route::middleware(['auth', 'no-internet-explorer'])->group(function (){
//    Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
//    Route::resource('companies', \App\Http\Controllers\CompanyController::class, ['except' => ['show']]);
});
