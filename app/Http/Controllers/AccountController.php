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
      $row=User::where('email',$request->email)->first();
      if($row){
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
          $request->session()->regenerate();
          return redirect('/home');
        }
      }
      return back()->withErrors(
        [
          'msg'=>'メールアドレスまたはパスワードが正しくありません'
        ]
        );
    }

    public function form(Request $request)
    {
      return view('account.form'); 
    }

    public function register(Request $request)
    {
      //バリデーション
      $rule=[
        'name' => 'required',
        'tel' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required',
      ];
      $msg=[
        'name.required' => '氏名の入力は必須です',
        'tel.required' => '電話番号は必須です',
        'email.required' => 'メールアドレスは必須です',
        'email.unique' => 'メールアドレスの重複登録はできません',
        'email.email' => 'メールアドレスの形式をご確認ください',
        'password.required' => 'パスワードは入力必須です',
        'password.confirmed' => 'パスワードが一致しません',
        'password_confirmation.required' => 'パスワード（確認）は入力必須です'
      ];
      $request->validate($rule,$msg);
      


      User::create(
        [
         'name' => $request->name,
         'tel' => $request->tel,
         'email' => $request->email,
         'role' => 1,
         'password' => Hash::make($request->password),
        ]
       );
       return redirect('/login');
    }

    public function logout(Request $request)
    {
      // return view('login'); 
    }


    
}



