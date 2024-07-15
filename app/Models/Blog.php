<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['blogID','headline','thumb','caption','views','intro','contents','author_id','status','cat_id','meta_tags','meta_desc'];
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function incrementReadCount() {
        $this->count++;
        return $this->save();
    }
    
}
