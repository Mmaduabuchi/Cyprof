<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Addtocartproducts;
use App\Models\products;

class addtocart extends Controller
{
    //
    public function addtocart(Request $request){
        $InputproductIDCode = $request->InputproductIDCode;
        $productsQuantity = $request->productsQuantity;
        $matchProduct = DB::select("SELECT * FROM products WHERE id = ?", [$InputproductIDCode]);
        $products = new addtocartproducts;
        foreach ($matchProduct as $data) {
            $products->productname = $data->productname;
            $products->productprice = $data->productprice;
            $products->productimage = $data->productimage;
            $products->productamount = $productsQuantity;
            $products->save();
        };
        return response()->json($data, 200);

    }
}
