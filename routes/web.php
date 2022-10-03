<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CentrePointController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\DataController;

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

    //khusus map
Route::get('/map',[App\Http\Controllers\MapController::class,'index'])->name('map.index');
Route::get('/map/{slug}',[App\Http\Controllers\MapController::class,'show'])->name('map.show');

//show data
Route::get('/mapData',[App\Http\Controllers\LahanController::class,'index'])->name('mapData.index');
Route::get('/mapData/data',[DataController::class,'mapData'])->name('map-data');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    //dashboard admin lte
    Route::get('/home', function() {
        return view('home');})->name('home');
    //edit user
    Route::resource('users', \App\Http\Controllers\UserController::class);
    
    //khusus map
    // Route::get('/map',[App\Http\Controllers\MapController::class,'index'])->name('map.index');
    // Route::get('/map/{slug}',[App\Http\Controllers\MapController::class,'show'])->name('map.show');

    Route::resource('centre-point',(CentrePointController::class));
    Route::resource('category',(CategoryController::class));
    Route::resource('space',(SpaceController::class));
    
    Route::get('/centrepoint/data',[DataController::class,'centrepoint'])->name('centre-point.data');
    Route::get('/categories/data',[DataController::class,'categories'])->name('data-category');
    Route::get('/spaces/data',[DataController::class,'spaces'])->name('data-space');
});

