<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    /**
     * Get the gift cards for the retailer.
     */
    public function giftCards()
    {
        return $this->hasMany('App\GiftCard');
    }
}
