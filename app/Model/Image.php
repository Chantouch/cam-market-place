<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Image extends Model
{
    protected $appends = ['hashid'];
    protected $fillable = ['img_name', 'imageable_id', 'imageable_type'];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'img_name.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000',
        ];
    }

    public static function messages()
    {
        return [
            'img_name.*.required' => 'Please upload an image',
            'img_name.*.mimes' => 'Only jpeg,png and bmp images are allowed',
            'img_name.*.max' => 'Sorry! Maximum allowed size for an image is 20MB',
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
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
