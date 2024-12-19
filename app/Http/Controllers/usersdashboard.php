<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class usersdashboard extends Controller
{
    //
    public function dashboard(){
        return view('customer.account');
    }
    //user setting page route
    public function settings(){
        return view('customer.settings');
    }
    public function orders(){
        return view('customer.orders');
    }
    //uploading products page
    public function upload(){
        if (Auth::check()) {
            if(auth()->user()->role == 'admin'){
                return view('admin.upload');
            }else{
                return redirect()->route('home');
            }
        }
        return view('login');
    }
    public function display(){
        $productsData = products::limit(6)->offset(0)->get();
        $phoneProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Phone']);
        $FashionProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Fashion']);
        $BabiesProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Babies']);
        $ElectronicsProductsData = DB::select("SELECT * FROM products WHERE productcategories = ?", ['Electronics']);
        return view('welcome', [
            'products' => $productsData, 
            'phoneProductsData' => $phoneProductsData,
            'Fashion' => $FashionProductsData,
            'Babies' => $BabiesProductsData,
            'ElectronicsData' => $ElectronicsProductsData
        ]);
    }

    public function storeproducts(Request $request): RedirectResponse
    {
        $request->validate(([
            'productname' => 'required',
            'productprice' => 'required',
            'productOldprice' => 'required',
            'productimage' => 'required|image|max:2048',
            'productInStock' => 'required',
            'productbrand' => 'required',
            'productcategories' => 'required',
            'productdescription' => 'required'
        ]));

        $products = new products;
        //get the product image
        $productimage = $request->file('productimage');
        if($productimage !== null){
            $path = $productimage->store('productsImages');
            $products->productname = $request->productname;
            $products->productprice = $request->productprice;
            $products->productOldprice = $request->productOldprice;
            $products->productimage = $path;
            $products->productInStock = $request->productInStock;
            $products->productbrand = $request->productbrand;
            $products->productcategories = $request->productcategories;
            $products->productdescription = $request->productdescription;
    
            $products->save();
            return redirect()->back()->with('success', 'Product item successfully uploaded.');
        }else{
            return redirect()->back()->with('error', 'Your product image is empty');
        }
    }
}