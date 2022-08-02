<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    Route::get('dummyapi', [\App\Http\Controllers\DummyApi::class, 'getData']);
    Route::get('customerslist/{id?}', [\App\Http\Controllers\CustomersListApi::class, 'getCustomers']);

    Route::post('add', [\App\Http\Controllers\CustomersListApi::class, 'addCustomer']);

    Route::put('update' , [\App\Http\Controllers\CustomersListApi::class, 'updateCustomer']);

    Route::delete('delete/{id}', [\App\Http\Controllers\CustomersListApi::class, 'deleteCustomer']);

    Route::get('searchCustomer/{string}', [\App\Http\Controllers\CustomersListApi::class, 'searchCustomer']);

    Route::apiResource('customers', \App\Http\Controllers\CustomerController::class);

});


Route::post('login', [\App\Http\Controllers\CustomersControllerForApi::class, 'index']);
