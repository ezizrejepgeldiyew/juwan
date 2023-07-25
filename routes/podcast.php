<?php

use App\Http\Controllers\API\PodkastController;
use Illuminate\Support\Facades\Route;

Route::controller(PodkastController::class)->group(function () {
    Route::get('/index', 'index');
    Route::get('/genre', 'genre');
    Route::get('/genre/{id}', 'genrePodcasts');
    Route::get('/index/{id}', 'podcastGetId');
});
