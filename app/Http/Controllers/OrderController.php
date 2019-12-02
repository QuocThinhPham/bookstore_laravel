<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Order;
use App\Cart;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {
        $orders = Auth::user()->order;
        // $orders = $orders->map(function($order, $key){
        //     return unserialize($order->cart);
        // });
        foreach($orders as $order)
        {
            $order->cart = unserialize($order->cart);
        }
        
        return view('profile',compact('orders'));
    }

    public function addOrder()
    {
        if(!Auth::check())
            return redirect('/login');

        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        $order = new Order();
        $order->user_id = Auth::user()->user_id;
        $order->cart = serialize($cart);
        $order->address = Auth::user()->user_address;
        $order->sdt = Auth::user()->user_phone_number;
        $order->save();
        Session::forget('cart');
        return redirect('profile');
    }
}
