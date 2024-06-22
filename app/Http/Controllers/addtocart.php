<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\Addtocartproducts;
use App\Models\products;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class addtocart extends Controller
{
    //
    public function cart(){
        $cartsData = DB::select('SELECT * FROM addtocartproducts');
        return view('cart', ['cartsData' => $cartsData]);
    }

    public function addtocart(Request $request){
        if (Auth::check()) {
            $userEmail = auth()->user()->email;
            $getUserToken = DB::table('users')->where('email', $userEmail)->get()->value('userToken');
            $InputproductIDCode = $request->InputproductIDCode;
            $productsQuantity = $request->productsQuantity;
            $matchProduct = DB::select("SELECT * FROM products WHERE id = ?", [$InputproductIDCode]);
            $products = new addtocartproducts;
            foreach ($matchProduct as $data) {
                $products->productname = $data->productname;
                $products->productprice = $data->productprice;
                $products->productimage = $data->productimage;
                $products->productamount = $productsQuantity;
                $products->userToken = $getUserToken;
                $products->save();
            };
            return response()->json($data, 200);
        }else{
            if ($request->hasCookie('userToken')) {
                $InputproductIDCode = $request->InputproductIDCode;
                $productsQuantity = $request->productsQuantity;
                $matchProduct = DB::select("SELECT * FROM products WHERE id = ?", [$InputproductIDCode]);
                $userTokenKey = $request->cookie('userToken');
                $products = new addtocartproducts;
                foreach ($matchProduct as $data) {
                    $products->productname = $data->productname;
                    $products->productprice = $data->productprice;
                    $products->productimage = $data->productimage;
                    $products->productamount = $productsQuantity;
                    $products->userToken = $userTokenKey;
                    $products->save();
                };
                return response()->json($data, 200);
            }else{
                $InputproductIDCode = $request->InputproductIDCode;
                $productsQuantity = $request->productsQuantity;
                $matchProduct = DB::select("SELECT * FROM products WHERE id = ?", [$InputproductIDCode]);
                $userToken = bin2hex(random_bytes(16));
                $userTokenCookie = Cookie::make('userToken', $userToken,  30);
                $products = new addtocartproducts;
                foreach ($matchProduct as $data) {
                    $products->productname = $data->productname;
                    $products->productprice = $data->productprice;
                    $products->productimage = $data->productimage;
                    $products->productamount = $productsQuantity;
                    $products->userToken = $userToken;
                    $products->save();
                };
                return response()->json($data, 200);
            }
        }
    }
}
