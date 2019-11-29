<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Types;
use App\Users;

class AdminController extends Controller
{
    //

    public function index()
    {
        $data['productlist'] = Books::all();
        $data['userlist'] = Users::all()->where('is_admin', '=', '0');
        $data['typelist'] = Types::all();
        return view('backend.index', $data);
    }
}
