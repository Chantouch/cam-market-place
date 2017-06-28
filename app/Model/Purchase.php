<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    protected $fillable = [
        'customer_id', 'address_id', 'total_paid_kh', 'total_paid_foreign', 'payment_method',
        'shipping_method', 'status', 'order_reference'
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
