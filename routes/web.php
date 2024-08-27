<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CheckupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PregnancyController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/article', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/{article:ulid}', [ArticleController::class, 'detail'])->name('article.detail');

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/list', [UserController::class, 'index'])->name('list');
        Route::get('/edit/{user:ulid}', [UserController::class, 'edit'])->name('edit');

        Route::get('/pregnancy', [PregnancyController::class, 'index'])->name('pregnancy');
    });

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');

    Route::get('/checkup', [CheckupController::class, 'index'])->name('checkup.index');

    Route::get('/about', [DashboardController::class, 'about'])->name('about');

    Route::get('/profile', [AccountController::class, 'index'])->name('profile');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
