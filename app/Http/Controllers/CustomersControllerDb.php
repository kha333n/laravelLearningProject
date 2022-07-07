<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CustomersControllerDb extends Controller
{
    function getData(){
        $data =  Customer::paginate(20);
//        return $data;
        return view('customersList', ['collection' => $data]);
    }
}

