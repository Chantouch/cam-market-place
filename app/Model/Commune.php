<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class Commune extends Model
{
    use SoftDeletes;
    protected $table = 'countries';
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'description', 'status', 'city_id', 'code', 'country_id'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|unique:countries|max:255',
            'code' => 'required|unique:countries|max:5',
        ];
    }

    public static function messages()
    {
        return [
//            'name.required' => 'Please enter your country name',
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
