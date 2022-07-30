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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dummyapi', [\App\Http\Controllers\DummyApi::class, 'getData']);
Route::get('customerslist/{id?}', [\App\Http\Controllers\CustomersListApi::class, 'getCustomers']);

Route::post('add', [\App\Http\Controllers\CustomersListApi::class, 'addCustomer']);

Route::put('update' , [\App\Http\Controllers\CustomersListApi::class, 'updateCustomer']);

Route::delete('delete/{id}', [\App\Http\Controllers\CustomersListApi::class, 'deleteCustomer']);
