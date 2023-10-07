<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class MeetingEmployee extends Model
{
    use Uuid;

    protected $fillable = [
        'meeting_id',
        'employee_id',
        'created_by',
    ];
}
