<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function show()
    {
        return view('users');
    }

    function getData(Request $request)
    {
        $data = $request->all();
        return $data;
    }

    function dbConnect(){
        return DB::select('select * from customers');;
    }
}
