<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::all();
        return view('vendors.orders.index',compact('orders'));
    }

    public function edit(Order $order)
    {
        return view('vendors.orders.edit',compact('order'));
    }

    public function update(UpdateOrderRequest $request)
    {

    }

    public function show(Order $order)
    {

    }
}
