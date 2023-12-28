<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index (){
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials)){            
            $request->session()->regenerate();
            if(Auth::guard('web')->user()->role=="user"){
                return redirect('/');
            }
            return redirect('/admin');
        }

        return back()->with('loginError','Login Failed');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        if($request->role == 'user'){
            return redirect('/');
        }else{
            return redirect('/login');
     }
    }
 
}