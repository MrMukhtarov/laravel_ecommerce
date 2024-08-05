<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "mainImageUrl",
        "title" .
        "taxPercent",
        "productCode",
        "rewardPoint",
        "stockCount",
        "inStock",
        "price",
        "discountPercent",
        "text",
        "description",
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,"product_tags",'tag_id','product_id');
    }

    public function reviews(){
        return $this->hasMany(Comment::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, "product_id");
    }
    
    public function cat($id){
        $product = Product::find($id);
        if(!empty($product->category_id)){
            $cat = Category::find($product->category_id);
            return $cat->name;
        }
    }
    
    public function sub_cat($id){
        $product = Product::find($id);
        if(!empty($product->sub_categories_id)){
            $cat = SubCategory::find($product->sub_categories_id);
            return $cat->name;
        }
    }

    public function get_category_name($id){
        $sub = SubCategory::find($id);
        $category_name = Category::where('id',$sub->category_id)->first();
        return $category_name->name;
    }

    
}
