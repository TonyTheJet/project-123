<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    protected $fillable = [
        'billing_address_id', //should be validated in the controller
        'exp_month',
        'exp_year',
        'last_four',
        'name_on_card',
        'type'
    ];

    protected $guarded = [
        'token',
        'user_id'
    ];
}
