<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;
use Request;

class Country extends Model
{
    use SoftDeletes;
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
                    'code' => 'required|unique:countries|max:5',
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
            'name.required' => 'Please enter your country name',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }


}
