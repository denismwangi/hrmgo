<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class EventEmployee extends Model
{
    use Uuid;

    protected $fillable = [
        'event_id',
        'employee_id',
        'created_by',
    ];
}
