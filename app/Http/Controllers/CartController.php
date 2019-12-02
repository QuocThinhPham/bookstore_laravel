<?php

namespace App\Http\Controllers;
use App\Books;
use Session;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
   

    //add item to cart
    public function getAddToCart(Request $req)
    {
        //still not a clean code
        $id = $req->id;
        if(Session::has('cart')) 
        {
            $cart = Session::get('cart');
            $req->session()->forget('cart');
        }
            
        else
            $cart = ['items' => null, 'totalAmount' => 0, 'totalPrice' => 0];
        $book = Books::find($id);
        $storedItem = ['amount' => 0, 'item' => $book];
        if($cart['items'])
        {
            if(array_key_exists($id, $cart['items']))
                $storedItem = $cart['items'][$id];
        }
        $storedItem['amount']++;
        $cart['items'][$id] = $storedItem;
        $cart['totalAmount']++;
        $cart['totalPrice'] += $book->book_price;
        Session::put('cart', $cart);
        return $cart['totalAmount'];
    }

    
    // show cart item
    public function getCart()
    {
        if(!Session::has('cart'))
        {
            return view('cart', ['books' => null]);
        }
        $cart = Session::get('cart');
        $books = $cart['items'];
        $totalPrice = $cart['totalPrice'];
        return view('cart', ['books' => $books, 'totalPrice' => $totalPrice]);
    }

    public function removeCartItem(Request $req)
    {
        //still not a clean code
        $id = $req->id;
        $cart = Session::get('cart');
        $req->session()->forget('cart');
        $cart['totalAmount'] -= $cart['items'][$id]['amount'];
        if($cart['totalAmount'] == 0)
        {
            $req->session()->forget('cart');
            return redirect('/shopping');
        }
        $cart['totalPrice'] -= $cart['items'][$id]['item']['book_price'] * $cart['items'][$id]['amount'];
        unset($cart['items'][$id]);
        Session::put('cart', $cart);
        
        return redirect('/shopping');
    }
}
