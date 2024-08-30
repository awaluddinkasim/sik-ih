<?php

use App\Http\Controllers\User\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ArticleController;
use App\Http\Controllers\User\CheckupController;
use App\Http\Controllers\User\PregnancyController;
use App\Http\Controllers\User\AppointmentController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AccountController::class, 'store']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', [AccountController::class, 'get']);
    Route::put('/user', [AccountController::class, 'update']);

    Route::get('/articles', [ArticleController::class, 'get']);

    Route::get('/appointments', [AppointmentController::class, 'get']);
    Route::post('/appointments', [AppointmentController::class, 'store']);

    Route::get('/pregnancy', [PregnancyController::class, 'get']);
    Route::post('/pregnancy', [PregnancyController::class, 'store']);

    Route::get('/checkup/{pregnancy:id}', [CheckupController::class, 'get']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
