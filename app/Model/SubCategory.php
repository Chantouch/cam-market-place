<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class SubCategory extends Model
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $appends = ['hashid'];
    protected $fillable = [
        'name', 'description', 'status', 'category_id'
    ];

    //===============Validation===============//
    public static function rules()
    {
        return [
            'name' => 'required|unique:countries|max:255',
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
