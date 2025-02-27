<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function createView(){
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }
}
