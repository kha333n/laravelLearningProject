<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpMethodsTestController extends Controller
{
    function getSubmit(Request $request){
        return $request->all();
    }

    function postSubmit(Request $request){
        return $request->all();
    }

    function putSubmit(Request $request){
        return $request->all();
    }

    function deleteSubmit(Request $request){
        return $request->all();
    }
}
