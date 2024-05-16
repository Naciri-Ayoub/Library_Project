<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::All();
        return view('order.index',[
            'orders'=> $orders,
        ]);
    }
    public function show($id) {
        $order = Order::find($id);
        return view('order.show',[
            'order'=> $order,
        ]);
    }
    public function destroy($id){
        Order::destroy($id);
     
         return redirect('/orders')->with('success', 'order deleted successfully');
     }
}
