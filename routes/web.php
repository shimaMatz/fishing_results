<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user/{user_id}', [App\Http\Controllers\ProfileController::class,'index'])->name('index');
// Route::get('/profile/{user_id}/edit', [App\Http\Controllers\ProfileController::class,'dashboard'])->name('dashboard');
// Route::get('/profile/{user_id}/save', [App\Http\Controllers\ProfileController::class,'dashboard'])->name('dashboard');
// Route::get('/profile/{user_id}/delete', [App\Http\Controllers\ProfileController::class,'dashboard'])->name('dashboard');
