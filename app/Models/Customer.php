<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Accessors
    // function get[Name of the column]Attribute($value)
    function getPostalCodeAttribute($value){
        return "PO Box: ". $value;
    }
}
