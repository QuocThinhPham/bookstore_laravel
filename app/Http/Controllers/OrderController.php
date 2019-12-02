<?php

namespace App\Http\Controllers;

use Auth;
use Session;
<<<<<<< HEAD
use App\Order;
use App\Cart;
use Illuminate\Support\Collection;
=======
use App\Users;
use App\Order;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
>>>>>>> 3c69d6e2e67e5836f696a26aeef8d3a5937c48c5
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {
<<<<<<< HEAD
        $orders = Auth::user()->order;
        // $orders = $orders->map(function($order, $key){
        //     return unserialize($order->cart);
        // });
        foreach($orders as $order)
        {
            $order->cart = unserialize($order->cart);
        }
        
        return view('profile',compact('orders'));
=======
        $orders = Users::find(Auth::user()->user_id)->order;
        // $orders = $orders->map(function($order, $key){
        //     return unserialize($order->cart);
        // });
    
        return view('profile', ['orders' => $orders]);
>>>>>>> 3c69d6e2e67e5836f696a26aeef8d3a5937c48c5
    }

    public function addOrder()
    {
        if(!Auth::check())
<<<<<<< HEAD
            return redirect('/login');

        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 
        $order = new Order();
        $order->user_id = Auth::user()->user_id;
        $order->cart = serialize($cart);
        $order->address = Auth::user()->user_address;
        $order->sdt = Auth::user()->user_phone_number;
        $order->save();
=======
            redirect('/login');

        
        
        $cart = Session::get('cart');
        $order = new Order();
        $order->user_id = Auth::user()->user_id;
        $order->totalPrice = $cart['totalPrice'];
        $order->save();
        foreach($cart['items'] as $sItem)
        {
            DB::table('order_detail')
            ->insert(['order_id' => $order->order_id, 'book_id' => $sItem['item']['book_id'], 'amount' => $sItem['amount']]);
        }
>>>>>>> 3c69d6e2e67e5836f696a26aeef8d3a5937c48c5
        Session::forget('cart');
        return redirect('profile');
    }
}
