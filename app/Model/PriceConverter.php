<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PriceConverter extends Model
{
    protected $fillable = ['product_id', 'currency_id', 'amount', 'code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }
}
