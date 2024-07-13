<?php

namespace App\Models\Partials;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{
    use HasFactory;
    protected $model = 'FAQs';
    protected $fillable = ['question','answer','status'];
}
