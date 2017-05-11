<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class Currency extends Model
{
    use SoftDeletes;
    protected $appends = ['hashid'];
    protected $fillable = [
        "symbol", "name", "symbol_native", "decimal_digits", "rounding", "code", "name_plural", 'status'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|unique:countries|max:255',
            'code' => 'required|unique:countries|max:3',
        ];
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
