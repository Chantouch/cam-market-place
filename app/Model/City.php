<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;
use Request;

class City extends Model
{
    protected $table = "countries";
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'description', 'status', 'country_id', 'code'
    ];


    //===============Validation===============//
    public static function rules($id = null)
    {
        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|unique:countries|max:255',
                    'code' => 'required|unique:countries|max:255',
                    'country_id' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|unique:countries,name,' . $id . ',id',
                    'code' => 'required|unique:countries,code,' . $id . ',id',
                ];
            }
            default:
                break;
        }
        return self::rules($id);
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
