<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class SubAttribute extends Model
{
    protected $table = "attributes";
    protected $appends = ['hashid'];
    protected $fillable = [
        'value', 'position', 'parent_id', 'status'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|max:255',
            'public_name' => 'required|max:255',
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
