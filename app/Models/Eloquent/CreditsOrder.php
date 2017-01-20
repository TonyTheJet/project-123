<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class CreditsOrder extends Model
{
    protected $fillable = [
        'credits'
    ];

    protected $guarded = [
        'amt_paid',
        'bill_on_date',
        'billed_date',
        'currency_code',
        'subscription_id',
        'user_id'
    ];
}
