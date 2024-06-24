<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // =========start-redirect-to-dashboard==========
    public function redirectDash()
    {
        $redirect = '';

        if(Auth::user() && Auth::user()->role == 0){
            $redirect = '/employee/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 1){
            $redirect = '/supervisor/dashboard';
        }
        else if(Auth::user() && Auth::user()->role == 2){
            $redirect = '/administrator/dashboard';
        }
        else{
            $redirect = '/';
        }

        return $redirect;
    }
    // =========end-redirect-to-dashboard==========

    public function load_login(){
        if(Auth::user()){
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email','password');
        if(Auth::attempt($userCredential)){

            $route = $this->redirectDash();
            return redirect($route);
        }
        else{
            return back()->with('error','Username & Password is incorrect');
        }
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }









}