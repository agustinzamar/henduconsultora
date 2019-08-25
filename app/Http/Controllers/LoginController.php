<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    public function login(){
        $credentials = $this->validate(request(), [
            'username' => 'string|required|exists:usuario,username',
            'password' => 'string|required'
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('inicio');
        }

        return back()
                    ->withErrors(['username' => trans('auth.failed')])
                    ->withInput(request(['username']));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('inicio');
    }

}
