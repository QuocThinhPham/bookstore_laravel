<?php

namespace App\Http\Controllers;
use App\login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function CheckUser(Request $request)
    {
        $user = $request->input('username');
        $pass = $request->input('password');
        if($user == "thinh123" && $pass == "123")
        {
            return view('home');
        }
        else
        {
            return view('LoginForm',['error' => 'Dang Nhap That Bai']); 
        }
    }
}
