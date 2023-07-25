<?php

use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\ReadBookController;
use App\Http\Controllers\API\WishListController;
use Illuminate\Support\Facades\Route;

Route::controller(BookController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/{id}', 'selectBook');
    Route::post('/search', 'search');
});

Route::controller(ReadBookController::class)->prefix('/read-book')->group(function () {
    Route::post('/store', 'store');
    // Today
    Route::get('/today/count/book', 'countTodayBook');
    Route::get('/today/count/audioBook', 'countTodayAudioBook');
    Route::get('/today/book', 'getTodayBook');
    Route::get('/today/audioBook', 'getTodayAudioBook');
    // All
    Route::get('/count/book', 'countBook');
    Route::get('/count/audioBook', 'countAudioBook');
    Route::get('/audioBook', 'getAudioBook');
    Route::get('/book', 'getBook');
});

Route::controller(WishListController::class)->prefix('/wish-list')->group(function () {
    Route::post('/store', 'store');
    Route::get('/count/book', 'countBook');
    Route::get('/count/audioBook', 'countAudioBook');
    Route::get('/audioBook', 'getAudioBook');
    Route::get('/book', 'getBook');
});
