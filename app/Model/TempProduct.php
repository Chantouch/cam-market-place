<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TempProduct extends Model
{
    protected $fillable = ['product_code', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
