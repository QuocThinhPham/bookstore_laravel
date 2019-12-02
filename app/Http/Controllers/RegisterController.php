<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }

    public function createUser(Request $req)
    {
        $user = new Users();
        $user->user_name = $req->username;
        $user->user_phone_number = $req->phone_number;
        $user->user_email = $req->email;
        $user->user_address = $req->address;
        $user->user_password = Hash::make($req->password);
        $user->save();
        $info = 'Đăng ký thành công. Vui lòng đăng nhập để tiếp tục';
        return redirect('home')->with('info', $info);
    }
}
