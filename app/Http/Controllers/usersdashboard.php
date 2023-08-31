<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class usersdashboard extends Controller
{
    //
    public function dashboard(){
        return view('customer.account');
    }
    //uploading products page
    public function upload(){
        return view('admin.upload');
    }
    public function display(){}

    public function storeproducts(Request $request): RedirectResponse
    {
        $request->validate(([
            'productname' => 'required',
            'productprice' => 'required',
            'productimage' => 'required|image|max:2048',
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
            $products->productimage = $path;
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
