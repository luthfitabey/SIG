<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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
    return view('dashboard.dash');
    // return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'admin.adminHome'])->name('admin.home');
    //  Route::get('/admin/pegawai', 'PegawaiController@index');

    // Route::resource('pegawai', 'PegawaiController');
    // Route::get('pgw_export', 'PegawaiController@exportFile');
    // Route::post('import_pgw', 'PegawaiController@import');
    // Route::get('pegawai/create', 'PegawaiController@create');
    // Route::post('pegawai/new', "PegawaiController@store")->name('pgw.new');
    // Route::delete('pegawai/{id}', "PegawaiController@destroy");
});
  