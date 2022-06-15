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

//auth group
Route::middleware(['auth', 'no-internet-explorer'])->group(function (){
//    Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
//    Route::resource('companies', \App\Http\Controllers\CompanyController::class, ['except' => ['show']]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

Route::get('/morph', [\App\Http\Controllers\SandboxController::class, 'addMorphTest']);
