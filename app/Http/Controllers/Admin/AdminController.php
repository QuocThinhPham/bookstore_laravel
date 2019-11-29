<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $data['userlist'] = Users::all();
        $data['typelist'] = Types::all();
        return view('backend.index', $data);
    }
}
