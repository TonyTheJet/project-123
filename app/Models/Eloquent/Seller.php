<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'about',
        'business_name',
        'url'
    ];
}
