<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $brands = Brand::all();
        $sliders = Slider::all();
        $products = Product::all();
        return view("front.home.index", compact(['brands',"sliders","products"]));
    }
}
