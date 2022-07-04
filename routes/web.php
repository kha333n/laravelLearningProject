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
Route::view('/', 'welcome')->middleware('protectedPage');
//Route::get('/={name}', function ($name) {
//    return view('welcome', ['name' => $name]);
//});

//Route::get('/about', function (){
//   return view('about');
//});

Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/contact', 'contact');
Route::get('/user', [UserController::class, 'show']);
Route::get('/login/get/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'getSubmit']);
Route::post('/login/post/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'postSubmit']);
Route::put('/login/put/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'putSubmit']);
Route::delete('/login/delete/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'deleteSubmit']);
Route::get('/dbconnect', [\App\Http\Controllers\CustomersControllerDb::class, 'getData']);
Route::get('/callapi', [\App\Http\Controllers\ApiController::class, 'callApi']);

//Route::redirect('/{anything}', '/');

Route::view('users', 'users');

Route::post('users', [UserController::class, 'getData']);

Route::view('/noaccess', 'noaccess');   // redirect to noaccess page

//Route::group(['middleware' => 'protectedPage'], function () {
//    Route::view('/', 'welcome');
//});



