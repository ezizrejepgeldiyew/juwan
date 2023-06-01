<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Support\Facades\Route;

Route::controller(BookController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/{id}', 'selectBook');
});
