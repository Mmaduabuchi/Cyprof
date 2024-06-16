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
        return view("/products/Baby-Products");
    }
    public function Computing(){
        return view("/products/Computing");
    }
    public function Electronics(){
        return view("/products/Electronics");
    }
    public function Fashion(){
        return view("/products/Fashion");
    }
    public function Gaming(){
        return view("/products/Gaming");
    }
    public function PhoneTablets(){
        return view("/products/Phones&Tablets");
    }
    public function SportingGoods(){
        return view("/products/Sporting-Goods");
    }
    public function HealthBeauty(){
        return view("/products/Health&Beauty");
    }
}
