<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class admin extends Controller
{
    //admin control route
    public function admin(){
        if (Auth::check()) {
            if (auth()->user()->role == 'admin') {                
                return view('admin.admin');
            }else{
                return redirect()->route('home');
            }
        }
        return view('login');

    }

}
