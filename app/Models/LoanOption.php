<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class LoanOption extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'created_by',
    ];
}
