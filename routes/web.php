<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CreateUserAccountController;
use App\Http\Controllers\AccountListController;
use App\Http\Controllers\StudentReportController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/login/auth', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [DashboardController::class, 'index']);



Route::get('/students', [StudentController::class, 'index']);

Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');

Route::get('/profile', function () { return view('components.student-profile'); });

Route::get('/account/create', [CreateUserAccountController::class, 'index'])->name('page.user.create');

Route::post('/create-user', [CreateUserAccountController::class, 'createUser'])->name('create.user');

Route::get('/account/list', [AccountListController::class, 'index']);

Route::get('/account/{account}', [StudentController::class, 'show'])->name('user.show');

Route::get('/report/students', [StudentReportController::class, 'index']);



