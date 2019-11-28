<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class AdminController extends Controller
{
    //

    public function index()
    {
        $data['productlist'] = Books::all();
        return view('backend.index', $data);
    }
}
