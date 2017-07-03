<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class SocialAccount extends Authenticatable
{
    protected $fillable = ['customer_id', 'provider_user_id', 'provider'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
