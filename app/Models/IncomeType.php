<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class IncomeType extends Model
{
    use Uuid;

    protected $fillable = [
        'income_type',
        'created_by',
    ];
}
