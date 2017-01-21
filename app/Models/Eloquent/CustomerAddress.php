<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{

    /**
     * the attributes that are mass-assignable
     *
     * @var array
     */
    protected $fillable = [
        'address1',
        'address2',
        'city',
        'country_code',
        'name',
        'state_province',
        'zip'
    ];
}
