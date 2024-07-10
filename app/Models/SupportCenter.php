<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportCenter extends Model
{
    use HasFactory;
    protected $table = "support_centers";
    protected $fillable = ['m_number','s_number','m_email','s_email','m_address','s_address','google_maps','contacts_info'];
}
