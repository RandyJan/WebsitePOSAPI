<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteparts extends Model
{
    use HasFactory;
    protected $table = "SiteParts";


    public static function getAllProducts(){
        $result = static::select('DESCRIPTION','PRODUCT_ID','RETAIL','CATEGORY')
                    ->get();
                    if($result){
                        return $result;
                    }
                    return false;
    }
}
