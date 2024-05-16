<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::All();
        return view('client.index',[
            'clients'=>$clients,
        ]
    );
    }

    public function create() {
        return view('client.addform');
    }

    public function store(Request $request) {
        $name = $request->name;
        $image =$request->file('image')->getClientOriginalName();
        $email= $request->email;
        $birthday = $request->birthday;
        $phone = $request->phone;
        $gender = $request->gender;

        // validate
        $request->validate([
            'name'=>'required|string',
            'email'=> 'required',
        ]);
        if($request->hasFile('image')){
            $request->file('image')->storeAs('client',$image,'public');
        }
        //create 
        Client::create([
            'name'=>$name,
            'image'=>$image,
            'email'=>$email,
            'phone' =>$phone,
            'birthday' =>$birthday,
            'gender' =>$gender,
        ]);
        //redirect
        return redirect('/client');
    }

    public function edit($id) {
        $client = Client::find($id);
        return view('client.editform',[
            'client'=>$client,
        ]);
    }

    public function update(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $email= $request->email;
        $birthday = $request->birthday;
        $phone = $request->phone;
        $gender = $request->gender;

        $client = Client::find($id);
        // validate
        // $request->validate([
        //     'name'=>'required|string',
        //     'email'=> 'required',
        // ]);
         //update 
         
        $client->name = $name;
        $client->email = $email;
        $client->phone  = $phone;
        $client->birthday  = $birthday;
        $client->gender  = $gender;
        
        if($request->hasFile('image')){
            $image =$request->file('image')->getClientOriginalName();
            $old_file = public_path('Client/').$client->image;
            File::delete($old_file);
            $request->file('image')->storeAs('client',$image,'public');
            $client->image = $image;
        }
        $client->update();
        //redirect
        return redirect('/client');
    }

    public function destroy($id){
        $orders = Order::where('client_id', $id)->get();
        
        if(count($orders)!=0){
            return redirect('/client')->with('error', 'client can\'t be deleted');
        }
       Client::destroy($id);
    
        return redirect('/client')->with('success', 'client deleted successfully');
    }
}


