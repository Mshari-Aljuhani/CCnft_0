<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
Auth::routes();

Route::get('/',[PageController::class,'LandingPage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/saveEmail',[EmailController::class,'store'])->name('store.email');
Route::resource('email', EmailController::class);
Route::get('/exportEmails',[EmailController::class,'exportEmails'])->name('exportEmails');


