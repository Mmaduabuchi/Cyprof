<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = "products";    
    protected $primaryKey = 'id';

    protected $fillable = [
        'productname',
        'productprice',
        'productOldprice',
        'productimage',
        'productInStock',
        'productbrand',
        'productcategories',
        'productdescription',
    ];
}