<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function callApi(){
        $data = Http::get('https://reqres.in/api/users?page=2');
        return view('userslist', ['collection' => $data['data']]);
    }
}
