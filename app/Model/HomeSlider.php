<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class HomeSlider extends Model
{
    use SoftDeletes;
    protected $appends = ['hashid'];
    protected $fillable = [
        'pause_on_hover', 'loop_forever', 'speed'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'speed' => 'required|min:3|integer',
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

    //==========RelationShip========//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function image_slider()
    {
        return $this->hasMany(ImageSlider::class,'parent_id')->whereNotNull('parent_id');
    }
}
