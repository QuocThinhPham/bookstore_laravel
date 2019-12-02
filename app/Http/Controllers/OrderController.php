<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Users;
use App\Order;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index()
    {
        $orders = Users::find(Auth::user()->user_id)->order;
        // $orders = $orders->map(function($order, $key){
        //     return unserialize($order->cart);
        // });

        return view('profile', ['orders' => $orders]);
    }

    public function addOrder()
    {
        if (!Auth::check())
            return redirect('login');

        $cart = Session::get('cart');
        $order = new Order();
        $order->user_id = Auth::user()->user_id;
        $order->totalPrice = $cart['totalPrice'];
        $order->save();
        foreach ($cart['items'] as $sItem) {
            DB::table('order_detail')
                ->insert(['order_id' => $order->order_id, 'book_id' => $sItem['item']['book_id'], 'amount' => $sItem['amount']]);
        }
        Session::forget('cart');
        return redirect('profile');
    }
}
