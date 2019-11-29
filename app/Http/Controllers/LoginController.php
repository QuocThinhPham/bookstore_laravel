<?php

namespace App\Http\Controllers;

use App\User;
use Vallidator;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    //

    public function index()
    {
        return view('login');
    }

    public function checkUser(Request $req)
    {

        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'user_email'  => $req->email,
            'password' => $req->password
        );

        if (Auth::attempt($user_data)) {
            return redirect('home');
        } else {
            $error = "Email hoặc mật khẩu không khớp.";
            return view('login', compact('error'));
        }
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($arr)) {
            return redirect()->intended('home');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
