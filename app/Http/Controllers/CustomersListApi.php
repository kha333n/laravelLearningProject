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

    function updateCustomer(Request $request){
        $customer = Customer::find($request->CustomerID);
        $customer->CustomerName = $request->CustomerName;
        $customer->ContactName = $request->ContactName;
        $customer->Address = $request->Address;
        $customer->City = $request->City;
        $customer->PostalCode = $request->PostalCode;
        $customer->Country = $request->Country;

        $result = $customer->save();
        if ($request){
            return ['Result'=>'Data Has been Updated'];
        }else{
            return ['Result'=>'Error occurred.'];
        }

    }

    function addCustomer(Request $request){
//        $customersCount = (int) Customer::query('SELECT COUNT(*) FROM customers;');
        $customer = new Customer();
        $customer->CustomerID = $request->CustomerID;
        $customer->CustomerName = $request->CustomerName;
        $customer->ContactName = $request->ContactName;
        $customer->Address = $request->Address;
        $customer->City = $request->City;
        $customer->PostalCode = $request->PostalCode;
        $customer->Country = $request->Country;

        $result = $customer->save();
        if ($result){
            return ['Result'=>'Data Has been Updated'];
        }else{
            return ['Result'=>'Error occurred.'];
        }

    }

    function deleteCustomer($id){
        $customer = Customer::find($id);
        $result = $customer->delete();
        if ($result){
            return ['Result'=>'Customer Deleted'];
        }else{
            return ['Result'=>'Error occurred.'];
        }
    }
}
