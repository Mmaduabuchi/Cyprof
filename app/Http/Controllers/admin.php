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
        }else{
            return view('login');
        }
    }
    public function payments(){
        if (Auth::check()) {
            if (auth()->user()->role == 'admin') { 
                return view("/admin/payments");
            }else{
                return redirect()->route('home');
            }
        }else{            
            return view('login');
        }
    }
    public function allusers(){
        if (Auth::check()) {
            if (auth()->user()->role == 'admin') { 
                return view("/admin/users");
            }else{
                return redirect()->route('home');
            }
        }else{            
            return view('login');
        }
    }
    public function orders(){
        if (Auth::check()) {
            if (auth()->user()->role == 'admin') {
                return view("/admin/orders");
            }else{
                return redirect()->route('home');
            }
        }else{            
            return view('login');
        }
    }

}
