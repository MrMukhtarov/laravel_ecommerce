<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class ProductDetailController extends Controller
{
    public function Index($slug){
        $product = Product::where("slug",$slug)->first();
        return view("front.productDetail.index",compact("product"));
    }

}
