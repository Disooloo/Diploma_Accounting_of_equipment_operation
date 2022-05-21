<?php

use App\Http\Controllers\Admin\BranchesConstoller;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\NotificationsConstoller;
use App\Http\Controllers\Admin\ProcessesController;
use App\Http\Controllers\Admin\StatsController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WorkTimeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
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
//
//Route::get('/news', [App\Http\Controllers\IndexController::class, 'news'])->name('news'); // news
//// Главные
Route::get('/13', [App\Http\Controllers\IndexController::class, 'history'])->name('history'); // История изменения
Route::get('/14', [App\Http\Controllers\IndexController::class, 'repair'])->name('repair'); // Ремонты
//Route::get('/17', [App\Http\Controllers\IndexController::class, 'movements'])->name('movements'); // Перемещения
//
//
Route::get('/my_profiles', [IndexController::class, 'my_profiles'])->name('my_profiles_user');
//
//Route::get('/16', [App\Http\Controllers\IndexController::class, 'workTime'])->name('workTime'); // График работы

Route::resource('work_time', WorkTimeController::class);
//Route::get('work_time/{work_time}', [IndexController::class, 'workTime_update'])->name('workTime_update');



Route::group(['middleware' => 'auth'], function () {
    // code
    Route::resource('team', TeamController::class);


    Route::group(['middleware' => ['is_admin']], function () {
        // code
    });
});


Route::get('/15', [IndexController::class, 'objectMain'])->name('objectMain'); // Обьекты

// Готовое

Route::group(['prefix' => ''], function (){
    Route::resource('/', TeamController::class);
    Route::post('/team/dop1/{team}', [IndexController::class, 'dop1team'])->name('dop1team');
    Route::get('/team/settings/{team}', [IndexController::class, 'teamSettings'])->name('teamSettings');
    Route::get('/team/team_test/{team}', [IndexController::class, 'team_test'])->name('team_test');
});

Route::get('/organizations', [IndexController::class, 'organizations'])->name('organizations'); // Организации
Route::get('/view_object', [IndexController::class, 'view_object'])->name('view_object'); // Виды обьектов
Route::get('/type_object', [IndexController::class, 'type_object'])->name('type_object'); // Тип обьектов
Route::get('/type_work', [IndexController::class, 'type_work'])->name('type_work'); // Тип работы
Route::get('/admins', [App\Http\Controllers\IndexController::class, 'full_user_adm'])->name('full_user_adm'); // Пользователи
Route::resource('status', StatsController::class);

Route::group(['prefix' => 'model-object'], function () {
    Route::get('/', [IndexController::class, 'mode_object'])->name('model-object');
    Route::post('/create', [IndexController::class, 'mode_object_create'])->name('mode_object_create');
});



Route::group(['prefix' => 'processes'], function () {
    Route::get('/', [ProcessesController::class, 'index'])->name('processes.index'); //processesFile
    Route::post('/nda', [ProcessesController::class, 'nda_word'])->name('processesFile.nda_word'); //processesFile
    Route::post('/vacation', [ProcessesController::class, 'vacation'])->name('processesFile.vacation'); //processesFile/vacation
    Route::post('/Cardinal', [ProcessesController::class, 'Cardinal'])->name('processesFile.Cardinal'); //processesFile/vacation
});


Route::resource('/company', CompanyController::class);
Route::get('/global_settings', [IndexController::class, 'global_settings'])->name('global_settings.index'); //global_settings
Route::resource('/notification', NotificationsConstoller::class); //notification_full
Route::resource('branches', BranchesConstoller::class);
Route::resource('location', LocationController::class);



//Export
Route::group(['prefix' => 'export'], function () {
    Route::get('/location', [ExportController::class, 'export_location'])->name('export_location');
    Route::get('/model-object', [ExportController::class, 'model_object'])->name('export_model_object');
});


//errors
Route::get('/404', [IndexController::class, 'NotFind'])->name('NotFind');
Route::get('/403', [IndexController::class, 'BlockedLogin'])->name('BlockedLogin');



Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
