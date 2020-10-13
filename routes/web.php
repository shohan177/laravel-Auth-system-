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

Route::get('showAll', 'App\Http\Controllers\Auth\RegisterController@showAllUser') ->name('showAll');
Route::get('dasboard', 'App\Http\Controllers\Auth\RegisterController@dasboard') ->name('user.dasboard');
Route::resource('roll', 'App\Http\Controllers\rollController');
Route::resource('user','App\Http\Controllers\userController');

Route::get('admin','App\Http\Controllers\Model\adminAuthControler@logAndReg') -> name("admin.loreg");
Route::post('admin','App\Http\Controllers\Model\adminAuthControler@login') -> name("admin.loreg");
Route::post('admin_log','App\Http\Controllers\Model\adminAuthControler@reg') -> name("admin.loreg");
