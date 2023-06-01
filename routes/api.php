<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\PodkastController;
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
Route::controller(BookController::class)->group(function () {
    Route::get('/book', 'book');
    Route::get('/book/category', 'category');
});
Route::controller(PostController::class)->group(function () {
    Route::get('/post', 'post');
    Route::get('/post/category', 'category');
});
Route::controller(PodkastController::class)->group(function () {
    Route::get('/podkast', 'podkast');
    Route::get('/podkast/category', 'category');
});
