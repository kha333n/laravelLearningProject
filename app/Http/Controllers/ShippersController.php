<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shipper;

class ShippersController extends Controller
{
    function getData(shipper $key){
        return $key;
    }
}
