<?php

namespace App\Http\Controllers;

use App\Models\Client;
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
     public function create(Request $request){
        // dd($request);
        // Validate the request data
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'price' => 'required|numeric',
        //     'phone' => 'required|string|max:20',
        //     'total' => 'required|numeric',
        //     'delivery_address' => 'required|string|max:255',
        //     'gender' => 'required|string|max:10',
        //     'birthday' => 'required|date',
        //     'email' => 'required|string|email|max:255|unique:clients,email',
        //     'description' => 'nullable|string',
        //     'city' => 'nullable|string',
        // ]);
    
        // Handle the image upload
        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('images'), $imageName);
    
        // Create the client
        $client = Client::create([
            'name' => $request->firstname . " ". $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'image' => 'image.jpg',
           

        ]);
    
        // Create the order
        $order = Order::create([
            'client_id' => $client->id,  // Assuming an order belongs to a client
            'product_id' => $request->product_id,
            'phone' => $request->phone,
            'total' => $request->total,
            'delivery_address' => $request->delivery_address,
            'city' => $request->city,
        
        ]);
    
        return redirect('/thanks');
    }
    
}
