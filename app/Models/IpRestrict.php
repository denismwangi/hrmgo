<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class IpRestrict extends Model
{
    use Uuid;

    protected $fillable = [
        'ip',
        'created_by',
    ];
}
