<?php

namespace App\Http\Controllers;

use App\Books;
use App\Cart;
use Illuminate\Http\Request;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index')->with('books', $books);
    }

}
