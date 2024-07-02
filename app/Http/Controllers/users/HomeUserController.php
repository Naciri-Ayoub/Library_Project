<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function index(){
        $categories = Category::All();
     
      
        // dd($products);
        // dd($products);
        return view('frontend.index', compact('categories'));
            }
}

