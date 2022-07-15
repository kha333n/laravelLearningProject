<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersListApi extends Controller
{
    //
    function getCustomers($id=null){
        if ($id==null){
            return Customer::all();
        }else{
            return Customer::find($id);
        }
    }
}
