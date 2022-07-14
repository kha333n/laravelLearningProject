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


Route::get('/profile', function (){
    if (session('username')){
        return view('profile');
    }
    return redirect('login');
});

Route::get('/logout', function (){
    if (session('username')){
        session()->pull('username', null);
        return redirect('login');
    }
    return view('login');
});

Route::get('/login', function (){
    if (session('username')){
        return redirect('profile');
    }
    return view('login');
});


Route::view('/store', 'storedata');


Route::view('/contact', 'contact');

Route::get('/user', [UserController::class, 'show']);

Route::get('/login/get/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'getSubmit']);

Route::post('/login/post/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'postSubmit']);

Route::post('/login/submit', [\App\Http\Controllers\loginController::class, 'login']);

Route::post('/storedata', [\App\Http\Controllers\StoreDataController::class, 'storeData']);

Route::put('/login/put/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'putSubmit']);

Route::delete('/login/delete/submit', [\App\Http\Controllers\HttpMethodsTestController::class, 'deleteSubmit']);

Route::get('/customersList', [\App\Http\Controllers\CustomersControllerDb::class, 'getData']);

Route::get('/callapi', [\App\Http\Controllers\ApiController::class, 'callApi']);

//Route::redirect('/{anything}', '/');

Route::view('users', 'users');

Route::post('users', [UserController::class, 'getData']);

Route::view('/noaccess', 'noaccess');   // redirect to noaccess page

//Route::group(['middleware' => 'protectedPage'], function () {
//    Route::view('/', 'welcome');
//});


Route::view('upload', 'upload');

Route::post('upload', [\App\Http\Controllers\UploadController::class, 'upload']);

Route::view('addCustomer', 'addCustomer');

Route::post('addCustomer', [\App\Http\Controllers\AddCustomerController::class, 'addCustomer']);
Route::post('editCustomer/{id}', [\App\Http\Controllers\AddCustomerController::class, 'editCustomer']);

Route::get('deleteCustomer/{CustomerID}', [\App\Http\Controllers\CustomersControllerDb::class, 'deleteCustomer']);
Route::get('editCustomer/{CustomerID}', [\App\Http\Controllers\CustomersControllerDb::class, 'editCustomer']);


Route::get('productsCategories', [\App\Http\Controllers\productCategoriesController::class, 'fetchData']);

Route::get('suppliers/{key:ShipperName}', [\App\Http\Controllers\ShippersController::class, 'getData']);
