<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('articles', ArticleController::class);
});

// Article controller
Route::controller(ArticleController::class)->group(function() {
    Route::get('/articles', 'index');
    Route::post('/articles', 'store');
    Route::get('/articles/{id}', 'show');
    Route::put('/articles/{id}', 'update');
    Route::delete('/articles/{id}', 'destroy');
});

// Register controller
Route::controller(RegisterController::class)->group(function() {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});