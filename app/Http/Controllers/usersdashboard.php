<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
