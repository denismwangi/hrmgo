<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use Uuid;

    protected $fillable = [
        'title',
        'days',
        'created_by',
    ];
}
