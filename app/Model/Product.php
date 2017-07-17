<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Vinkla\Hashids\Facades\Hashids;

class Product extends Model
{
    protected $appends = ['hashid'];
    use Sluggable;
    protected $fillable = [
        'name', 'code', 'cost', 'price', 'origin_place', 'city_id', 'currency_id', 'description',
        'discount', 'discount_type', 'author', 'can_order', 'new', 'qty', 'user_id', 'img_path',
        'popular', 'status', 'short_description', 'city_id', 'attribute_id'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|max:255',
            'qty' => 'required|integer',
            'short_description' => 'required|max:255',
            'currency_id' => 'required|integer',
            'category_id' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'code' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'currency_id.required' => 'The currency field is required',
            'category_id.required' => 'The category field is required',
        ];
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
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     * Get all of the tags for the post.
     */

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    //----------PivotTable-----------//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function languages()
    {
        return $this->belongsToMany(Language::class, 'products_languages', 'product_id', 'language_id')->withPivot('product_id', 'language_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'products_categories', 'product_id', 'category_id')->withPivot('product_id', 'category_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function price_converter()
    {
        return $this->hasMany(PriceConverter::class, 'product_id', 'id');
    }

    //----------Sluggable---------//

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'seo_url'
            ]
        ];
    }

    //-------GetAttributes--------//

    /**
     * @return string
     */
    public function getSeoUrlAttribute()
    {
        return $this->name . '-of-' . $this->user->username;
    }

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

    /**
     * @return string
     */
    public function tagList()
    {
        $tag = $this->tags;
        $tags = array();
        foreach ($tag as $tg) {
            $tags[$tg->tags] = $tg->tags;
        }
        return implode(', ', $tags);
    }
}
