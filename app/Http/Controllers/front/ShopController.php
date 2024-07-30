<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use WithPagination, WithoutUrlPagination; 

class ShopController extends Controller
{
    public function Index(){
        $products = Product::paginate(2);
        return view("front.shop.index",compact("products"));
    }
}
