<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
