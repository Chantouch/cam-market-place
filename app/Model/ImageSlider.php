<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class ImageSlider extends Model
{
    use SoftDeletes;
    protected $table = "home_sliders";
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'caption', 'description', 'status', 'parent_id', 'img_name', 'img_path', 'url'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required',
            'url' => 'required',
            'caption' => 'required',
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

    public function home_slider()
    {
        return $this->belongsTo(HomeSlider::class, 'parent_id')->whereNotNull('parent_id');
    }
}
