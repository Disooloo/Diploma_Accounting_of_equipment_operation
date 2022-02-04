<?php

use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\BranchesConstoller;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\NotificationsConstoller;
use App\Http\Controllers\Admin\ProcessesController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\IndexController;
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
// Номеклатура

Route::get('/news', [App\Http\Controllers\IndexController::class, 'news'])->name('news'); // news
Route::get('/8', [App\Http\Controllers\IndexController::class, 'view_object'])->name('view_object'); // Виды обьектов
Route::get('/9', [App\Http\Controllers\IndexController::class, 'type_object'])->name('type_object'); // Тип обьектов
Route::get('/10', [App\Http\Controllers\IndexController::class, 'model_object'])->name('model_object'); // Модель обьектов
Route::get('/11', [App\Http\Controllers\IndexController::class, 'type_work'])->name('type_work'); // Тип работы
Route::get('/12', [App\Http\Controllers\IndexController::class, 'full_user_adm'])->name('full_user_adm'); // Пользователи
// Главные
Route::get('/13', [App\Http\Controllers\IndexController::class, 'history'])->name('history'); // История изменения
Route::get('/14', [App\Http\Controllers\IndexController::class, 'repair'])->name('repair'); // Ремонты
Route::get('/15', [App\Http\Controllers\IndexController::class, 'objectMain'])->name('objectMain'); // Обьекты
Route::get('/16', [App\Http\Controllers\IndexController::class, 'workTime'])->name('workTime'); // График работы
Route::get('/17', [App\Http\Controllers\IndexController::class, 'movements'])->name('movements'); // Перемещения


Route::get('/1', [App\Http\Controllers\IndexController::class, 'tesst123123'])->name('tesst123123');




Route::resource('status', StatsController::class); // Потом вернуться

Route::get('/21', [App\Http\Controllers\IndexController::class, 'org'])->name('org'); // Организации

Route::get('/my_profiles', [IndexController::class, 'my_profiles'])->name('my_profiles_user');


// Готовое
Route::resource('team', TeamController::class);
Route::get('/team/dop1/{team}', [IndexController::class, 'dop1team'])->name('dop1team');
Route::get('/team/settings/{team}', [IndexController::class, 'teamSettings'])->name('teamSettings');
Route::get('/team/team_test/{team}', [IndexController::class, 'team_test'])->name('team_test');



Route::get('/crm', [App\Http\Controllers\IndexController::class, 'crm'])->name('crm'); // crm
Route::get('/processes', [ProcessesController::class, 'index'])->name('processes.index');//processesFile
Route::post('/processesFile/nda', [ProcessesController::class, 'nda_word'])->name('processesFile.nda_word');//processesFile
Route::post('/processesFile/vacation', [ProcessesController::class, 'vacation'])->name('processesFile.vacation');//processesFile/vacation

Route::resource('/company', CompanyController::class);
Route::get('/global_settings', [IndexController::class, 'global_settings'])->name('global_settings.index');//global_settings
Route::resource('/notification', NotificationsConstoller::class);//notification_full
Route::resource('branches', BranchesConstoller::class);
Route::resource('location', LocationController::class);



//Export
Route::get('export/location', [ExportController::class, 'export_location'])->name('export_location');
//


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
