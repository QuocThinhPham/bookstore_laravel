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
            'userEmail' => 'required|email',
            'userPass' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'user_email'  => $req->userEmail,
            'password' => $req->userPass
        );

        if (Auth::attempt($user_data)) {
            return redirect('/home');
        } else {
            $error = "Email hoặc mật khẩu không khớp.";
            return view('login', compact('error'));
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
}
