<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreDataController extends Controller
{
    function storeData(Request $request){
        $data = $request->input('user');
        $request->session()->flash('user', $data);
        return redirect('store');
    }
}
