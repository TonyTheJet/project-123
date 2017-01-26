<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class DigitalProduct extends Model
{
    //constants
    const STATUS_ACTIVE = 'A';
    const STATUS_DELETED = 'X';
    const STATUS_DISCONTINUED = 'D';
    const STATUS_PENDING_APPROVAL = 'P';



    protected $fillable = [
        'current_price_credits',
        'description',
        'name',
        'price_credits',
        'release_date',
        'status',
        'type_id'
    ];
}
