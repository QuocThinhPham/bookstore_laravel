<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('backend.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);
        $arr = ['user_email' => $request->email, 'user_password' => $request->password];
        if (Auth::attempt($arr)) {
            dd('Thanh cong!');
            // return redirect()->intended('dashboard/home');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
    }
}
