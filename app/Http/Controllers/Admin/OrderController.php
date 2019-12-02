<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Users;

class OrderController extends Controller
{
    //
    public function getOrder()
    {
        $orders = Users::all();

        return view('backend.order', ['orders' => $orders]);
    }
}
