<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TempData extends Model
{
    protected $fillable = ['customer_id', 'data'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(Customer::class);
    }
}
