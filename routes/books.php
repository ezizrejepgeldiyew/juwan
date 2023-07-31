<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\BookMarkController;
use App\Http\Controllers\API\ReadBookController;
use App\Http\Controllers\API\WishListController;
use Illuminate\Support\Facades\Route;

Route::controller(BookController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/select/{id}', 'selectBook');
    Route::post('/search', 'search');
    Route::get('/count','count');
});

Route::controller(ReadBookController::class)->prefix('/readBook')->group(function () {
    Route::post('/store', 'store');
    // Today
    Route::get('/today/book', 'todayBook');
    Route::get('/today/audioBook', 'todayAudioBook');
    // All
    Route::get('/audioBook', 'audioBook');
    Route::get('/book', 'book');
});

Route::controller(WishListController::class)->prefix('/wishList')->group(function () {
    Route::post('/store', 'store');
    Route::get('/audioBook', 'audioBook');
    Route::get('/book', 'book');
});

Route::controller(BookMarkController::class)->prefix('/bookMark')->group(function () {
    Route::post('/store', 'store');
    Route::get('/audioBook', 'audioBook');
    Route::get('/book', 'book');
});
