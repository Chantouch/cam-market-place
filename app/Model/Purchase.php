<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    protected $fillable = [
        'customer_id', 'contact_name', 'contact_phone', 'shipping_address', 'total_paid_kh', 'total_paid_foreign'
    ];


    //----------Relationship----------//

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchase_items()
    {
        return $this->hasMany(Purchase::class);
    }
}
