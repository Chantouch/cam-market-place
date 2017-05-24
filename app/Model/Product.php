<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Product extends Model
{
    protected $appends = ['hashid'];

    protected $fillable = [
        'name', 'code', 'cost', 'price', 'origin_place', 'city_id', 'currency_id', 'description',
        'category_id', 'discount_percent', 'discount_amount', 'author', 'language_id', 'new',
        'popular', 'status', 'short_description', 'city_id'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|max:255',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
