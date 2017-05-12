<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Attribute extends Model
{
    protected $appends = ['hashid'];
    protected $fillable = [
        'value', 'position', 'parent_id', 'name', 'public_name', 'status'
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sub_attribute()
    {
        return $this->hasMany(SubAttribute::class, 'parent_id')->whereNotNull('parent_id');
    }
}
