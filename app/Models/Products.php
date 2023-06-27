<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductVariant;
class Products extends Model
{
    protected $table = 'products';
    protected $guarded = [];  

    public function category_name(){
        return $this->belongsTo(Category::class,'category','id');
    }

    public function product_variants(){
        return $this->hasMany(ProductVariant::class,'id','product_id'); //primary key,forign key for products table
    }
}
