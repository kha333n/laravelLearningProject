<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function list()
    {
//        return DB::connection('mysql2')->table('products')->get(); // get all products from the second database

        return product::all(); // get all products from the Second database
    }
}
