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
Route::get('/6', [App\Http\Controllers\IndexController::class, 'local'])->name('local'); // Местоположение
Route::get('/7', [App\Http\Controllers\IndexController::class, 'stats'])->name('stats'); // Статусы
Route::get('/8', [App\Http\Controllers\IndexController::class, 'view_object'])->name('view_object'); // Виды обьектов
Route::get('/9', [App\Http\Controllers\IndexController::class, 'type_object'])->name('type_object'); // Тип обьектов
Route::get('/10', [App\Http\Controllers\IndexController::class, 'model_object'])->name('model_object'); // Модель обьектов
Route::get('/11', [App\Http\Controllers\IndexController::class, 'type_work'])->name('type_work'); // Тип работы
Route::get('/12', [App\Http\Controllers\IndexController::class, 'full_user_adm'])->name('full_user_adm'); // Пользователи





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
