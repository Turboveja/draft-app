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
Route::middleware(['auth', 'no-internet-explorer'])->group(function () {

});

//landing group
Route::get('/{artist_web_slug}', [\App\Http\Controllers\LandingController::class, 'index'])->middleware(['no-internet-explorer']);
Route::get('/static/demo', [\App\Http\Controllers\LandingController::class, 'indexDemo'])->middleware(['no-internet-explorer']);

Route::get('/sandbox/demo', [\App\Http\Controllers\LandingController::class, 'sandbox'])->middleware(['no-internet-explorer']);

//XML Creation Demo
//Route::get('/sandbox/xml-demo', [\App\Http\Controllers\XMLExportationController::class, 'testXML'])->middleware(['no-internet-explorer']);

//Generic dashboard //TODO make new artist not found generic
//Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);

require __DIR__ . '/auth.php';





//Route::get('/morph', [\App\Http\Controllers\SandboxController::class, 'addMorphTest']);
