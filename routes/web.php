<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     // return view('auth.login');
//     return view('welcome');
// });



Route::get('/', [Admin\DutyScheduleController::class, 'index'])->name('home');
Route::get('/pdf-jadual-bertugas', [Admin\DutyScheduleController::class, 'print'])->name('duty.print');

Route::resource('users', UserController::class)->only(['index']);


