<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;




Route::get('/', [HomeController::class, 'homePage']);
Route::get('/dashboard', [DashboardController::class, 'dashboardPage']);
Route::get('/category', [CategoryController::class, 'categoryPage']);

Route::get('/userRegistration', [UserController::class, 'userRegistrationPage']);
Route::get('/userLogin', [UserController::class, 'userLoginPage']);
Route::get('/userResetPassword', [UserController::class, 'userResetPasswordPage']);
Route::get('/sendOtp', [UserController::class, 'sendOtpPage']);
Route::get('/verifyOtp', [UserController::class, 'verifyOtpPage']);

Route::get('/userProfile', [UserController::class, 'userProfilePage']);
