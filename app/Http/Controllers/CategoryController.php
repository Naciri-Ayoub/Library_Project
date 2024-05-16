<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    // public function index() {
    //     return view('category.index');
    // }
    public function index() {
        $categories = Category::All();
        return view('category.index',[
            'categories'=>$categories,
        ]
        );
    }

    public function create() {
        return view('category.addform');
    }

    

    public function store(Request $request) {
        $name = $request->name;
        $image =$request->file('image')->getClientOriginalName();
        // validate
        $request->validate([
            'name'=>'required|string',
            'image'=>'required',
        ]);
        // tatstocky tsawr f data b had lcode
        if($request->hasFile('image')){
            $request->file('image')->storeAs('category',$image,'public');
        }

        //create 
        Category::create([
            'name'=>$name,
            'image'=>$image,
        ]);
        //redirect
        return redirect('/category');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('category.editform',[
            'category'=>$category,
        ]
        );
    }

    public function update(Request $request) {
        $id = $request->id;
        $name = $request->name;

        $category = Category::find($id);
         
        $category->name = $name;
        
        if($request->hasFile('image')){
            $image =$request->file('image')->getClientOriginalName();
            $old_file = public_path('category/').$category->image;
            File::delete($old_file);
            $request->file('image')->storeAs('category',$image,'public');
            $category->image = $image;
        }
        $category->update();
        //redirect
        return redirect('/category');
    }

    public function destroy($id){
        $products = Product::where('category_id', $id)->get();
        
        // foreach ($products as $product) {
        //     $product->category_id = $id; 
        //     $product->save(); 
        // }
        if(count($products)!=0){
            return redirect('/category')->with('error', 'Category can\'t be deleted');
        }
        Category::destroy($id);
    
        return redirect('/category')->with('success', 'Category deleted successfully');
    }
    
}
