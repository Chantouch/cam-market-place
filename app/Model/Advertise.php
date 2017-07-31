<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Advertise extends Model
{
    protected $appends = ['hashid'];
    protected $guarded = [];
    protected $dates = ['expired_at'];
    protected $fillable = ['title', 'types', 'link', 'partner_id', 'active', 'expired_at', 'path'];

    public static function rules()
    {
        return [
            'title' => 'required',
            'types' => 'required|in:1,2',
            'partner_id' => 'required',
            'attachment' => 'required|mimes:jpeg,bmp,png|max:10240'
        ];
    }

    public static function messages()
    {
        return [
            'partner_id.required' => 'The field partner is required'
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

//    public function getExpiredAtAttribute()
//    {
//        return Carbon::parse($this->attributes['expired_at']);
//    }
}
