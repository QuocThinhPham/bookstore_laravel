<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;

class ListbookController extends Controller
{
    public function index($id)
    {
        $books = Books::all()->where('type_id',$id);
        return view('category')->with('books',$books);
    }
}
