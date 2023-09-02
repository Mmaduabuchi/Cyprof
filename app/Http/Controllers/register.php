<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class register extends Controller
{
    //registration page return
    public function register(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('register');
    }
    //get and register users
    public function registerpost(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:100',
            'phone' => 'required|numeric',
            'email' => 'required|unique:users|email|max:100',
            'password' => ['required_with:Confirm_password', 'same:Confirm_password', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'Confirm_password' => '',
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => 'guest',

        ]);
        if (!$user) {
            return redirect()->back()->with('error', value: 'Registration failed try again.');
        }
        return redirect()->route('login')->with('success', value: 'You have successfully been registered.');
    }
    public function login(){
        if (Auth::check()) {
            return redirect()->route('login');
        }
        return view('login');
    }
    public function loginpost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                # code...
                return redirect()->intended(route('adminpage'));
            }
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error', 'Email or Password incorrect.');
    }

    public function logout(){
        Session()->flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
