<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    //
    public function getUser()
    {
        $data['userlist'] = Users::all()->where('is_admin', '=', '0');
        return view('backend.user', $data);
    }
}
