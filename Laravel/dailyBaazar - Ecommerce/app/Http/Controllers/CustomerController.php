<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class CustomerController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        $users = User::all();
        // $order_details = Order_Details::orderBy('id', 'DESC')->get();
        // $order_items = Order_Items::orderBy('id','DESC')->get();
        // $users = User::all();

        return view('admin.customer.index',compact('orders','users'));
    }
}
