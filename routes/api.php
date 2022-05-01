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


Route::controller(\App\Http\Controllers\TicketsController::class)->group(function (){
    Route::get('/tickets','index');
});

Route::controller(\App\Http\Controllers\CinemasController::class)->group(function (){
    Route::get('/cinemas','index');
});

Route::controller(\App\Http\Controllers\DrinkController::class)->group(function (){
    Route::get('/drinks','index');
});

Route::controller(\App\Http\Controllers\FastFoodController::class)->group(function (){
    Route::get('/fast-food','index');
});

Route::controller(\App\Http\Controllers\ShowTimeController::class)->group(function (){
    Route::get('/show-time','index');
});

Route::controller(\App\Http\Controllers\SnacksController::class)->group(function (){
    Route::get('/snacks','index');
});

Route::controller(\App\Http\Controllers\TicketsController::class)->group(function (){
    Route::get('/book-ticket','create');
});


Route::controller(\App\Http\Controllers\SeatsController::class)->group(function (){
    Route::get('/seats','index');
});
