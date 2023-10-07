<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use Uuid;

    protected $fillable = [
        'employee_id',
        'allowance_option',
        'title',
        'amount',
        'created_by',
    ];

    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'id', 'employee_id')->first();
    }

    public function allowance_option()
    {
        return $this->hasOne('App\Models\AllowanceOption', 'id', 'allowance_option')->first();
    }

    public static $Allowancetype = [
        'fixed'=>'Fixed',
        'percentage'=> 'Percentage',
    ];
}
