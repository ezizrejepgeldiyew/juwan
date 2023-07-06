<?php

use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\FavoritController;
use App\Http\Controllers\API\PodkastController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/favorit',[FavoritController::class, 'favorit']);
