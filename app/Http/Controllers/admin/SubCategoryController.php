<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function get_by_category_id($id){
        $sub_categories = SubCategory::where('category_id',$id)->get();
        if(!$sub_categories){
            return null;
        }
        return $sub_categories;
    }
}
