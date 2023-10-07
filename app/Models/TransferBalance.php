<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class TransferBalance extends Model
{
    use Uuid;

    protected $fillable = [
        'from_account_id',
        'to_account_id',
        'date',
        'amount',
        'payment_type_id',
        'referal_id',
        'description',
        'created_by',
    ];

    public function account($account)
    {
        $account = AccountList::where('id','=',$account)->first();
        return $account;
    }

    public function payment_type($payment)
    {
        $payment = PaymentType::where('id','=',$payment)->first();
        return $payment;
    }
}
