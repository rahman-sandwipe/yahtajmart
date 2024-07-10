<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $table = "settings";
    protected $fillable = [
        'web_name',
        'web_tagline',
        'web_link',
        'web_authors',
        'web_logo',
        'web_fevicon',
        'web_metatags',
        'web_metadesc',
        'web_timezone',
        'author_mail',
        'author_phone',
        'author_address'
    ];
}
