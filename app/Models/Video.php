<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table ="videos";
    protected $fillable = ['headline','public_id','author_id','cat_id','flatform','embed_code','thumb','intro','status','meta_tags','meta_desc'];
    
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
