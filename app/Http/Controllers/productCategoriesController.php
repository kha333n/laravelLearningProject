<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\categorie;

class productCategoriesController extends Controller
{
    function fetchData(){
        return categorie::find(5)->categorie;
    }
}
