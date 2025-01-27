<?php

namespace App\Http\Controllers;

// use \App\Mail\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

class resetPassword extends Controller
{
    //
    public function forgotten(Request $request): RedirectResponse
    {

        $request->validate([
            'email' => 'required|email|max:100',
        ]);

        
        $matchUser = DB::select("SELECT * FROM users WHERE email = ?", [$request->email]);
        
        if(!$matchUser){
            //retuen error msg
            return redirect()->back()->with('error', value: 'This email does not exists in our system.');
        }else{
            foreach ($matchUser as $user) {
                $name =  $user->name;
                $token  =  $user->userToken;
            }
            Mail::to($request->email)->send(new \App\Mail\ResetPassword([ 'name' => $name, 'token' => $token]));
            //return success msg
            return redirect()->back()->with('success', value: 'Password Reset mail has been sent to your provided email address.');
            
        }
    }

    public function success(Request $request)
    {
        $request->validate([
            'password' => ['required_with:Confirm_password', 'same:Confirm_password', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'Confirm_password' => '',
        ]);

    }
}
