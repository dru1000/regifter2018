<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    //Allows Mass Assignment
    protected $guarded = [];

    /**
     * Get the Retailer for this Gift Card.
     */
    public function retailer()
    {
        return $this->belongsTo('App\Retailer');
    }
}
