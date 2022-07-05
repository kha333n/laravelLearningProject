<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(Request $request){
        $data = $request->input('username');
        $request->session()->put('username', $data);
        return redirect('profile');
    }
}
