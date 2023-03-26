<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicalController;
use App\Http\Controllers\KarteController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/clinicals/search', 'App\Http\Controllers\ClinicalController@search')->name('clinicals.search'); 
Route::post('/reservations/search', 'App\Http\Controllers\ReservationController@search')->name('reservations.search'); 

// REST設計に変更する必要あり
Route::resource('clinicals', ClinicalController::class);
Route::resource('kartes', KarteController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('users', UserController::class);
