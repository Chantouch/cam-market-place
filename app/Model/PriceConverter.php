<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PriceConverter extends Model
{
    protected $fillable = ['product_id', 'currency_id', 'amount'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
