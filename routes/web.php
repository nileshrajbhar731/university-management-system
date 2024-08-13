<?php

use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\Auth\CustomRegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('teachers', TeacherController::class);
    Route::resource('students', StudentController::class);
});


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', [StudentController::class, 'index']);
Route::post('/logout', [CustomLoginController::class, 'logout'])->name('logout');
Route::get('login', [CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomLoginController::class, 'login']);
Route::get('register', [CustomRegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [CustomRegisterController::class, 'register']);

