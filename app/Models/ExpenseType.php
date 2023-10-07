<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    use Uuid;

    protected $fillable = [
        'expense_type',
        'created_by',
    ];
}
