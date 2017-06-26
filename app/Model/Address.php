<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'customer_id', 'first_name', 'last_name', 'company', 'vat_number', 'phone',
        'address', 'address_complement', 'zip_postal_code', 'city_id', 'country_id'
    ];

}
