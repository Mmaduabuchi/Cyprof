<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addtocartproducts extends Model
{
    use HasFactory;

    protected $table = "Addtocartproducts";   
    protected $primaryKey = 'id';

    protected $fillable = [
        "productname",
        "productprice",
        "productimage",
        "productamount",
        "userToken",
    ];

    // protected $casts = [
    //     'productId' => 'hashed',
    // ];
}
