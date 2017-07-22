<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Purchase extends Model
{

    protected $appends = ['hashid'];
    protected $fillable = [
        'customer_id', 'address_id', 'total', 'payment_method',
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
        return $this->hasMany(PurchaseOrder::class);
    }

    //-----------Get and Set attribute----------//

    /**
     * @return mixed
     */
    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }
}
