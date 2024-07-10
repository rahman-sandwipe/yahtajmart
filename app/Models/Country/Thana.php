<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','slug','div_id','dist_id','status'];
    public function division(){
        return $this->belongsTo(Division::class, 'div_id');
    }
    public function district(){
        return $this->belongsTo(District::class, 'dist_id');
    }
}
