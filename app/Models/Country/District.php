<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','slug','status','div_id'];

    public function division(){
        return $this->belongsTo(Division::class, 'div_id');
    }
}
