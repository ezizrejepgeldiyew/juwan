<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\RegisterOTPController;
use App\Http\Controllers\API\Auth\LoginOTPController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/login-otp', [LoginOTPController::class, 'loginOTP']);
Route::post('/register-otp', [RegisterOTPController::class, 'registerOTP']);
Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
