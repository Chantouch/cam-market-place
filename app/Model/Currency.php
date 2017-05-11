<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "symbol", "name", "symbol_native", "decimal_digits", "rounding", "code", "name_plural"
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
}
