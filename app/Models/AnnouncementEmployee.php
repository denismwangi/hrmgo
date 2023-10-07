<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class AnnouncementEmployee extends Model
{
    use Uuid;

    protected $fillable = [
        'announcement_id',
        'employee_id',
        'created_by',
    ];
}
