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
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/article/{article:ulid}', [ArticleController::class, 'detail'])->name('article.detail');
    Route::get('/article/{article:ulid}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article:ulid}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article:ulid}', [ArticleController::class, 'destroy'])->name('article.destroy');

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/list', [UserController::class, 'index'])->name('list');
        Route::get('/edit/{user:ulid}', [UserController::class, 'edit'])->name('edit');
        Route::put('/edit/{user:ulid}', [UserController::class, 'update'])->name('update');
        Route::delete('/destroy/{user:ulid}', [UserController::class, 'destroy'])->name('destroy');

        Route::get('/pregnancy', [PregnancyController::class, 'index'])->name('pregnancy');
    });

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment/{appointment:ulid}/confirm', [AppointmentController::class, 'confirm'])->name('appointment.confirm');
    Route::post('/appointment/{appointment:ulid}/cancel', [AppointmentController::class, 'cancel'])->name('appointment.cancel');

    Route::get('/checkup', [CheckupController::class, 'index'])->name('checkup.index');
    Route::post('/checkup', [CheckupController::class, 'store'])->name('checkup.store');
    Route::get('/checkup/{pregnancy:ulid}', [CheckupController::class, 'detail'])->name('checkup.detail');

    Route::get('/profile', [AccountController::class, 'index'])->name('profile');
    Route::put('/profile', [AccountController::class, 'update'])->name('profile.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
