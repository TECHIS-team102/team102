<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login(Request $request)
    {
      return view('account.login'); 
    }

    public function auth(Request $request)
    {
      // return view('login'); 
    }

    public function form(Request $request)
    {
      return view('account.form'); 
    }

    public function register(Request $request)
    {
      // return view('login'); 
    }

    public function logout(Request $request)
    {
      // return view('login'); 
    }


    
}



