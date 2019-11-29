<?php

namespace App\Http\Controllers;

use App\Books;
use App\Cart;
use Illuminate\Http\Request;
use Session;
use Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Books::all();
        return view('books.index')->with('books', $books);
    }

    public function post()
    { }

<<<<<<< HEAD
    public function getAddToCart(Request $req)
    {
        $book = Books::find($req->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);


        $cart->add($book, $book->book_id);
        if (Session::has('cart')) {
            $req->session()->forget('cart');
        }
        Session::put('cart', $cart);
        // return Session::get('cart')->totalAmount;
        return Session::get('cart')->totalAmount;
    }

    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('cart', ['books' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart', ['books' => $cart->items, 'totalPrice' => $cart->totalPrice]);
=======
    public function getAddToCart(Request $req, $id)
    {
        if (!Auth::check()) {
            return redirect()->intended('login');
        }
        $book = Books::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $cart->add($book, $book->book_id);
        if (Session::has('cart')) {
            $req->session()->forget('cart');
        }
        Session::put('cart', $cart);
        return redirect('/books');
>>>>>>> QThinh
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
