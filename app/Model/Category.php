<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'description', 'status'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|unique:countries|max:255',
        ];
    }

    public static function messages()
    {
        return [

        ];
    }
}
