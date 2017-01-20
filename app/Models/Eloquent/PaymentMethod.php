<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    protected $fillable = [
        'name',
        'notes'
    ];
}
