<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Admin;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('backend.login');
    }

    public function postLogin(Request $request)
    {
        $arr = ['email' => $request->email, 'password' => $request->password];
        if (Auth::guard('admin')->attempt($arr)) {
            return redirect('dashboard/home');
        } else {
            return back()->withInput()->with('error', 'Tài khoản hoặc mật khẩu chưa đúng');
        }
    }
}
