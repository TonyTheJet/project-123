<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class DigitalProduct extends Model
{
    //constants
    const DESCRIPTION_MAX_LENGTH = 500;
    const DESCRIPTION_MIN_LENGTH = 25;
    const PRICE_MAX = 199.99;
    const PRICE_MIN = 0.00;
    const STATUS_ACTIVE = 'A';
    const STATUS_DELETED = 'X';
    const STATUS_DISCONTINUED = 'D';
    const STATUS_PENDING_APPROVAL = 'P';
    const THUMBNAIL_HEIGHT = 600;
    const THUMBNAIL_WIDTH = 600;



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
