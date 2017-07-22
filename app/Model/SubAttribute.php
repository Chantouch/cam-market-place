<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;
use Request;

class SubAttribute extends Model
{
    protected $table = "attributes";
    protected $appends = ['hashid'];
    protected $fillable = [
        'value', 'position', 'parent_id', 'status', 'name'
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
                    'name' => 'required|unique:attributes|max:255',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|unique:attributes,name,' . $id . ',id',
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
