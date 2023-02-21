<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('landing-page');
}); 

Route::get('/index', [HelloController::class, 'index'])->name('index')->middleware('auth');
Route::get('/about', [HelloController::class, 'getAbout'])->name('about')->middleware('auth');

Route::get('/indexActivity', [HelloController::class, 'indexActivity'])->name('indexActivity')->middleware('auth');
Route::post('/storeActivity', [HelloController::class, 'storeActivity'])->name('storeActivity')->middleware('auth');

Route::get('/indexEditActivity/{id}',[HelloController::class,'indexEditActivity'])->name('indexEditActivity');
Route::post('/updateEditActivity/{id}',[HelloController::class,'updateActivity'])->name('updateActivity');

Route::post('/deletedActivity/{id}',[HelloController::class,'deleteActivity'])->name('deleteActivity');
//route register
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/registerstore',[RegisterController::class,'store'])->name('registerstore');
//route login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/loginAuth',[LoginController::class,'Auth'])->name('Auth');
//route logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
