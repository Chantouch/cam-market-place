<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['img_name'];

    public function products()
    {
        return $this->morphedByMany(Product::class, 'imageable');
    }
}
