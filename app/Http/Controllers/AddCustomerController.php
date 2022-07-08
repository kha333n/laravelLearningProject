<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class AddCustomerController extends Controller
{
    function addCustomer(Request $request){
        $customer = new Customer();
        $customer->CustomerName = $request->CustomerName;
        $customer->ContactName = $request->ContactName;
        $customer->Address = $request->Address;
        $customer->City = $request->City;
        $customer->PostalCode = $request->PostalCode;
        $customer->Country = $request->Country;
        $customer->save();
        $request->session()->flash('success', 'Customer added successfully!');
        return redirect('customersList');
    }

    function editCustomer(Request $request, $id){
        $customer = array('CustomerID'=> $request->CustomerID,
            'CustomerName'=> $request->CustomerName,
            'ContactName'=> $request->ContactName,
            'Address'=> $request->Address,
            'City'=> $request->City,
            'PostalCode'=> $request->PostalCode,
            'Country'=> $request->Country);
//        $customer->CustomerID = $request->CustomerID;
//        $customer->CustomerName = $request->CustomerName;
//        $customer->ContactName = $request->ContactName;
//        $customer->Address = $request->Address;
//        $customer->City = $request->City;
//        $customer->PostalCode = $request->PostalCode;
//        $customer->Country = $request->Country;
//        echo $customer;
        Customer::query()->where('CustomerID', $request->CustomerID)->update($customer);
        $request->session()->flash('success', 'Customer updated successfully!');
        return redirect('customersList');
    }
}
