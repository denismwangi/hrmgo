<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class UserCoupon extends Model
{
    use Uuid;

    protected $fillable = [
        'user',
        'coupon',
    ];

    public function userDetail()
    {
        return $this->hasOne('App\Models\User', 'id', 'user');
    }

    public function coupon_detail()
    {
        return $this->hasOne('App\Models\Coupon', 'id', 'coupon');
    }


}
