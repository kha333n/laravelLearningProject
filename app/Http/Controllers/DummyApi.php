<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApi extends Controller
{
    //
    function getData(){
        return ['name'=>'Usman Khan', 'address'=>'jhang'];
    }
}
