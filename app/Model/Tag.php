<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Tag extends Model
{

    use Sluggable;
    protected $appends = ['hashid'];
    protected $fillable = ['tags', 'taggable_id', 'taggable_type'];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'tags' => 'sometimes|exists:tags,id',
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
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function taggable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    function tags_to_array($string)
    {
        $trimmed_array = explode(',', $string);
        $tags = array_map('trim', $trimmed_array);
        // Create an empty collection
        $result = collect();
        foreach ($tags as $tag) {
            // Create a new tag if it doesn't exist and push it to the collection
            $result->push(Tag::firstOrCreate(['tags' => $tag]));
        }
        return $result;
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
                'source' => 'tags'
            ]
        ];
    }

    //-------GetAttributes--------//

    /**
     * @return string
     */
    public function getSeoUrlAttribute()
    {
        return $this->tags;
    }
}
