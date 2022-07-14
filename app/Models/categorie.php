<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $primaryKey = 'CategoryID';
    public static function translateColumn(string $column)
    {
        switch ($column) {
            case 'id':
                return 'CategoryID';
            default:
                return $column;
        }
    }

    function categorie(){
        return $this->hasMany('App\Models\product', 'CategoryID');
    }
}
