<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Details;
use App\Models\Order_Items;
use App\Models\User;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        $order_details = Order_Details::orderBy('id', 'DESC')->get();
        $order_items = Order_Items::orderBy('id','DESC')->get();
        $users = User::all();

        return view('admin.order.order', compact('orders','order_details','order_items','users'));
    }

    public function show($id)
    {
        $order = Order::where('id',$id)->first();

        if(!$order){
            abort(404);
        }

        $detail = Order_Details::where('order_id',$id)->first();
        $items = Order_Items::where('order_id',$id)->get();
        $total = Order_Items::where('order_id',$id)->orderBy('id','DESC')->value('total');
        $customer = User::find($order->user_id);

        return view('admin.order.order-details', compact('order','detail','items','total','customer'));
    }



}
