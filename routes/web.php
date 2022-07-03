<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Prevalent\Prevalent;

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

Route::view('/' . Prevalent::$about, Prevalent::$about);
Route::get('/' . Prevalent::$user, [UserController::class, 'show']);

//Route::redirect('/{anything}', '/');


Route::post(Prevalent::$users, [UserController::class, 'getData']);

Route::view(Prevalent::$noAccess, Prevalent::$noAccess);

Route::view('users', 'users')->middleware('protectedPage');
Route::view('/' . Prevalent::$contact, Prevalent::$contact);

//Route::group(['middleware'=>['protectedPage']], function (){
//    Route::view('users', 'users');
//    Route::view('/contact', 'contact');
//});
