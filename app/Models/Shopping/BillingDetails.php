<?php

namespace App\Models\Shopping;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetails extends Model
{
    use HasFactory;
    protected $table = "billing_details";
    protected $fillable =['order_id','customer_id','name', 'email', 'phone', 'address', 'additional_info','company_name'];
}
