<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['productID','condition','author_id','brand_id','title','slug','thumb','thumbs','width_or_size','total_stock','regular_price','offer_price','total_discount','sort_desc','description','aditional_info','cat_id','status','s_tags','meta_tags','meta_desc'];
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }



    
}