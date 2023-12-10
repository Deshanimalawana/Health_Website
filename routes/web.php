<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::view('home', 'home');

Route::view('blog', 'blog');

Route::view('appointment', 'appointment');

Route::view('layout', 'layout');

Route::view('login', 'login');

Route::view('register', 'register');

Route::post('adduser',[LoginController::class, 'getdata']);


Route::post('reg',[LoginController::class, 'regdata']);

Route::post('getappointment',[LoginController::class, 'getappointment']);

Route::post('contact',[LoginController::class, 'contact']);


