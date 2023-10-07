<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use Uuid;

    protected $fillable = [
        'employee_id',
        'title',
        'amount',
        'created_by',
    ];

    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id')->first();
    }

    public static $commissiontype = [
        'fixed'=>'Fixed',
        'percentage'=> 'Percentage',
    ];
}
