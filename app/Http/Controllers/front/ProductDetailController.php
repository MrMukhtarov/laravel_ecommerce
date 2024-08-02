<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class ProductDetailController extends Controller
{
    public function Index($slug)
    {
        $product = Product::where("slug", $slug)->first();
        $user_id = null;
        if (Auth::check() && Auth::user()) {
            $user_id = Auth::user()->id;
        }
        return view("front.productDetail.index", compact("product", "user_id"));
    }
}
