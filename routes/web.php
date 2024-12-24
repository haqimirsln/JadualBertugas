<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

// Route::get('/', function () {
//     // return view('auth.login');
//     return view('welcome');
// });



Route::get('/', [Admin\DutyScheduleController::class, 'index']);
Route::get('/pdf-jadual-bertugas', [Admin\DutyScheduleController::class, 'print'])->name('duty.print');

