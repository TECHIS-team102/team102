<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
      //バリデーション


      User::create(
        [
         'name' => $request->name,
         'tel' => $request->tel,
         'email' => $request->email,
         'role' => 1,
         'password' => Hash::make($request->password),
        ]
       );
    }

    public function logout(Request $request)
    {
      // return view('login'); 
    }


    
}



