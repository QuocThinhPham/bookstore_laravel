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

        if (Auth::guard('users')->attempt($user_data)) {
            return redirect('home');
        } else {
            $error = "Email hoặc mật khẩu không khớp.";
            return view('login', compact('error'));
        }
    }

    public function logout()
    {
        Auth::guard('users')->logout();
        return redirect('home');
    }
}
