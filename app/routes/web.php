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

Route::get('/1', [App\Http\Controllers\IndexController::class, 'index'])->name('main'); // Главная
Route::get('/2', [App\Http\Controllers\IndexController::class, 'comp'])->name('comp'); // Компании
Route::get('/3', [App\Http\Controllers\IndexController::class, 'team'])->name('team'); //Сотрудники
Route::get('/4', [App\Http\Controllers\IndexController::class, 'team1'])->name('team1'); //Сотрудники detail
Route::get('/news', [App\Http\Controllers\IndexController::class, 'news'])->name('news'); // news
Route::get('/5', [App\Http\Controllers\IndexController::class, 'branches'])->name('branches'); // Филиалы





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
