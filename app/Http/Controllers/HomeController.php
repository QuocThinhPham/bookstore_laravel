<?php

namespace App\Http\Controllers;
use App\Types;
use App\Books;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $types = Types::all();
        return view('home',compact('types'));
    }
    public function search(Request $request)
    {
        return view('category');
    }
    public function searchBook(Request $request)
    {
        $search = $request->search;
        $books = Books::where('book_name','like','%'.$search.'%')
        ->orwhere('book_price','like','%'.$search.'%')
        ->get();
        return view('category')->with('books',$books);
    }
}
