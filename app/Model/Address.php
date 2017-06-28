<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Address extends Model
{

    protected $appends = ['hashid'];

    protected $fillable = [
        'alias', 'customer_id', 'first_name', 'last_name', 'company', 'vat_number', 'phone',
        'address', 'address_complement', 'zip_postal_code', 'city_id', 'country_id'
    ];

    public static function rules()
    {
        return [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'address' => 'required|string',
            'zip_postal_code' => 'required|numeric',
            'city_id' => 'required|integer',
        ];
    }

    public static function messages()
    {
        return [
            'first_name.required' => 'Please field your first name',
            'city_id.required' => 'Please choose a city',
            'country_id.required' => 'Please choose a country',
        ];
    }

    //-------------Relationship-----------//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchases()
    {
        return $this->belongsTo(Purchase::class, 'address_id', 'id');
    }

    //---------Get and Set Attributes----------//

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

}
