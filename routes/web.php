<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[UserController::class, 'index'])->name('home');

Route::get('signup', function () {return view('signup');})->name('register');
Route::get('signin', function () {return view('signin');})->name('login');

Route::post('signup',[UserController::class, 'signup'])->name('signup');
Route::post('signin',[UserController::class, 'signin'])->name('signin');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('create_cv', function () {return view('user.create');})->name('create');
Route::post('store',[UserController::class, 'store'])->name('store_cv');
Route::post('update',[UserController::class, 'update'])->name('update_cv');
Route::get('show/{id}',[UserController::class,'show'])->name('show_cv');
Route::get('edit/{id}',[UserController::class,'edit'])->name('edit_cv');
Route::get('download_pdf/{id}',[UserController::class,'download_pdf']);


