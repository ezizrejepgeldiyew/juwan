<?php

use App\Http\Controllers\API\DownloadController;
use App\Http\Controllers\API\FavoritController;
use App\Http\Controllers\API\UserController;
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
Route::get('/favorits',[FavoritController::class, 'getFavorit']);
Route::post('/upload-avatar',[UserController::class, 'uploadAvatar']);
Route::get('/download/count',[DownloadController::class, 'index']);
Route::get('/download/store',[DownloadController::class, 'store']);