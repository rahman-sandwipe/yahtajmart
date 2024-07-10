<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photos";
    protected $fillable = ['public_id','author_id','cat_id','title','intro','file_size','r_price','s_price','thumb','images','status','meta_tags','meta_desc'];

    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
