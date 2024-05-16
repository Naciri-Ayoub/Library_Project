<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {
        $categories = Category::All();
        $products = Product::All();
        return view('product.index',[
            'categories'=> $categories,
            'Products'=> $products,
        ]);
    }
    public function create() {
        $categories = Category::All();
        return view('product.addform',[
            'categories'=> $categories,
        ]);
    }
    public function store(Request $request) {
        // dd($request);
        $name = $request->name;
        $category_id = $request->category;
        $quantity = $request->quantity;
        $price = $request->price;
        $image = $request->image;
        $description = $request->description;
        $code_bare = $request->code_bare;
        $image =$request->file('image')->getClientOriginalName();

        if($request->hasFile('image')){
            $request->file('image')->storeAs('product',$image,'public');
        }

        //create product hiya lmodel khask timportiha
        Product::create([
            'name'=>$name,
            'quantity'=>$quantity,
            'category_id'=>$category_id,
            'price'=>$price,
            'image'=>$image,
            'description' => $description,
            'code_bare' => $code_bare
        ]);
        //redirect
        return redirect('/product');
    }
    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.editform',[
            'categories'=>$categories,
            'product'=>$product,
        ]);
    }

    // change data
    //edit -----------------------------------------
    public function update(Request $request){
        $id = $request->id;
        // validation
        $request->validate([
            'name'=>'required',
        ]);
        // $this->image($request);
       
        // store in db
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->code_bare = $request->code_bare;

        if($request->hasFile(key:'image')){
            $image =$request->file('image')->getClientOriginalName();
            $old_file = public_path('product/').$product->image;
            File::delete($old_file);
            $request->file('image')->storeAs('product',$image,'public');
            $product->image = $image;
        }
        $product->update();

        return redirect('/product');
    }
    public function destroy($id){
        Product::destroy($id);
     
        return redirect('/product')->with('success', 'product deleted successfully');
     }
    
}

