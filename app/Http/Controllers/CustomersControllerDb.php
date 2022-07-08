<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;


class CustomersControllerDb extends Controller
{
    function getData(){
        $data =  Customer::paginate(10);
//        return $data;
        return view('customersList', ['collection' => $data]);
    }

    function deleteCustomer($CustomerID){
        $data = Customer::query()->where('CustomerID', $CustomerID)->delete();
        return redirect('/dbconnect');

    }

    function editCustomer($customerID){
        $data = Customer::query()->where('CustomerID', $customerID)->get();
//        echo $data;
        $customer = $data[0];
//        echo  $customer;
        return view('addCustomer', ['collection' => $customer]);
    }
}

