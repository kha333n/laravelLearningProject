<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersControllerDb extends Controller
{
    function getData(){
        return Customer::all();
    }
}
