<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\OrganizerSubController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminUserController;




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

Route::get('/', function () {
    return view('landing-page');
});

/* main route */
Route::get('/main', [MainController::class, 'index'])->name('main')->middleware('auth');

/* auth route */
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

Route::post('/register', [AuthController::class, 'store'])->name('register.store')->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::delete('/user/delete', [AuthController::class, 'destroy'])->name('user.delete');

/* forget-password route */
Route::get('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');

Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');

Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');

Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

/* subscribe route */
Route::post('/subscribe/store', [OrganizerSubController::class, 'subscribe'])->name('subscribe.store');

Route::get('/subscribe', function () {
    $black_hover = 'Be an organizer';
    return view('subscribe', compact('black_hover'));
})->name('subscribe');



Route::get('/reserve', [EventController::class, 'index'])->name('reserve');


Route::get('/manageEvent', [MainController::class, 'showManageEventPage'])->name('manageEvent');
Route::post('/create.event', [MainController::class, 'create'])->name('createevent');


Route::get('/manageCategories', [CategoryController::class, 'index'])->name('manageCategories')->middleware('auth');

Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::delete('/categories.destroySelected', [CategoryController::class, 'destroy'])->name('categories.destroySelected')->middleware('auth');

Route::get('/manageUsers', [AdminUserController::class, 'index'])->name('manageUsers')->middleware('auth');


Route::delete('/manageUsers/{userId}/delete', [AdminUserController::class, 'delete'])->name('manageUsers.delete')->middleware('auth');
Route::post('/manageUsers/{userId}/ban', [AdminUserController::class, 'ban'])->name('manageUsers.ban')->middleware('auth');
Route::post('/manageUsers/{userId}/unban', [AdminUserController::class, 'unban'])->name('manageUsers.unban')->middleware('auth');


Route::put('/manageUsers/{userId}/updateRole', [AdminUserController::class, 'updateRole'])->name('manageUsers.updateRole');

Route::get('/manageUsers/{userId}/editRole', [AdminUserController::class, 'editRole'])->name('manageUsers.editRole');
