<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;
use Request;

class Currency extends Model
{
    use SoftDeletes;
    protected $appends = ['hashid'];
    protected $fillable = [
        "symbol", "name", "symbol_native", "decimal_digits", "rounding", "code", "name_plural", 'status'
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
                    'name' => 'required|unique:currencies|max:255',
                    'code' => 'required|unique:currencies|max:5',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|unique:currencies,name,' . $id . ',id',
                    'code' => 'required|unique:currencies,code,' . $id . ',id',
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
