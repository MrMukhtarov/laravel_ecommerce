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
        $product = Product::where("id",$id)->first();
        if(isset($product->category_id) && isEmpty($product->category_id)){
            $cat = Category::where("id",$product->category_id)->first();
            return $cat->name;
        }
        if(isset($product->sub_categories_id) && isEmpty($product->sub_categories_id)){
            $cat = SubCategory::where("id",$product->sub_categories_id)->first();
            return $cat->name;
        }
    }

    
}
