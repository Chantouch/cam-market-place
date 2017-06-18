<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;
use Request;

class SubCategory extends Model
{
    use SoftDeletes;
    use Sluggable;
    protected $table = 'categories';
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'description', 'status', 'category_id', 'slug', 'path'
    ];

    //===============Validation===============//
    public static function rules($id = null)
    {
        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required|unique:categories|max:255',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name' => 'required|unique:categories,name,' . $id . ',id',
                ];
            }
            default:
                break;
        }
        return self::rules($id);
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

    //------------Relationship-------------//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     * Get all of the tags for the post.
     */

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
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
