<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductUserController extends Controller
{
    public function showProduct($category_id)
    {
        $products = Product::All()->where("category_id", "=", "${category_id}");
        foreach ($products as $product) {
            $product['category'] = Category::find($category_id)['name'];
        };
        // dd($products);
        // dd($products);
        return view('frontend.showproduct', compact('products'));
    }

    public function formproduct($product_id)
    {
        $product = Product::find($product_id);
        
        return view('frontend.formproduct', compact('product'));
    }
    public function showProductDetails($id) {
        $product = Product::find($id);
        
        return view('frontend.sidebar-left', compact('product'));
    }
}
