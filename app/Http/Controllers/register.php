<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class register extends Controller
{
    //registration page return
    public function register(){
        return view('register');
    }
    //get and register users
    public function registerpost(Request $request){
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->phone = $request->usernumber;
        $user->password = Hash::make($request->userpassword);

        $user->save();
        return back()->with('success', 'You have successfully been registered.');
    }
}
