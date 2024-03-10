<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        
        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials)) {
            return redirect()->route('login');
        }
        return redirect()->back()->withErrors([
            'error' => 'credenciales mal'
        ]);
    }
    //
}
