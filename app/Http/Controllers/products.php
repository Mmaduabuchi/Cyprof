<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class products extends Controller
{
    //
    public function products(Request $request){
        $productCodeID = $request->input("productCodeID");
        // dd($productCodeID);
        $matchProduct = DB::select("SELECT * FROM products WHERE id = ?", [$productCodeID]);
        // dd($matchProduct);
        return view("products", ["match" => $matchProduct]);
    }

    public function Appliances(){
        return view("/products/Appliances");
    }
    public function BabyProducts(){
        $BabiesProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Babies']);
        return view("/products/Baby-Products", ['Babies' => $BabiesProductsData]);
    }
    public function Computing(){
        return view("/products/Computing");
    }
    public function Electronics(){
        $ElectronicsProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Electronics']);
        return view("/products/Electronics", ['Electronics' => $ElectronicsProductsData]);
    }
    public function Fashion(){
        $FashionProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Fashion']);
        return view("/products/Fashion", ['Fashion' => $FashionProductsData]);
    }
    public function Gaming(){
        return view("/products/Gaming");
    }
    public function PhoneTablets(){
        $phoneProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Phone']);
        return view("/products/Phones&Tablets", ['phoneProductsData' => $phoneProductsData]);
    }
    public function SportingGoods(){
        return view("/products/Sporting-Goods");
    }
    public function HealthBeauty(){
        return view("/products/Health&Beauty");
    }
}
