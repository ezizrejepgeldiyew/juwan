<?php

use App\Http\Controllers\API\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('/index', 'index');
});
