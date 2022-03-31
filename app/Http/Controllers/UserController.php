<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function contactview(){

        if (Auth::check()) {
            return view('contact');
         }
        return view('auth.login');       
    }
    public function membershipview(){

        if (Auth::check()){
            return view('membership');
        }
        return view('auth.login');
    }
    public function productsView(){

        if(Auth::check()){
            return view('product');
        }
        return view('auth.login');

    }
    public function expertsview(){

        if(Auth::check()){
            return view('experts');
        }
        return view('auth.login');

    }
}
