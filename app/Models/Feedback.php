<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory;
    protected $table ="feedback";
    protected $fillable = ['feedback_id','client_id','author_id','thumb','name','designation','description','status'];
    public function user(){
        return $this->belongsTo(User::class, 'author_id');
    }
}
