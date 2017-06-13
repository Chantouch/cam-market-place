<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class FXRate extends Model
{

    protected $appends = ['hashid'];

    protected $fillable = [
        'source_currency', 'target_currency', 'exchange_rate', 'valid_from_date', 'valid_to_date'
    ];


    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

//===============Validation===============//
    public static function rules()
    {
        return [
            'source_currency' => 'required',
            'target_currency' => 'required',
            'exchange_rate' => 'required',
            'valid_from_date' => 'required',
            'valid_to_date' => 'required',
        ];
    }

    public static function messages()
    {
        return [

        ];
    }
}
