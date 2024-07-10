<?php

namespace App\Models\Frontends;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $fillable = ['quantity','product_id','user_id'];
    
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}