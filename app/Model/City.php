<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class City extends Model
{
    protected $table = "countries";
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'description', 'status', 'country_id', 'code'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|unique:countries|max:255',
            'country_id' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Please enter your city name',
            'country_id.required' => 'Please select a country',
        ];
    }

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }
}
