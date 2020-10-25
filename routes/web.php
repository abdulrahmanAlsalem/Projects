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

Route::get('/Profile/{user}',[App\Http\Controllers\ProfilesController::class,'show'])->middleware('auth');
Route::get('/Profile/{user}/Edit',[App\Http\Controllers\ProfilesController::class,'edit'])->middleware('auth');
Route::put('/Profile/{id}',[App\Http\Controllers\ProfilesController::class,'update'])->middleware('auth');
Route::post('/Event',[App\Http\Controllers\EventController::class,'store'])->middleware('auth');
Route::post('/Event/{event}',[\App\Http\Controllers\EventController::class,'join'])->middleware('auth');
