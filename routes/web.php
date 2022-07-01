<?php

use Illuminate\Support\Facades\Route;
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
Route::view('/', 'welcome');
//Route::get('/={name}', function ($name) {
//    return view('welcome', ['name' => $name]);
//});

//Route::get('/about', function (){
//   return view('about');
//});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::get('/user', [UserController::class, 'show']);

//Route::redirect('/{anything}', '/');

Route::view('users', 'users');

Route::post('users', [UserController::class, 'getData']);
