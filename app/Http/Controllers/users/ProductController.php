<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($category){
dd($category);
    }
}
