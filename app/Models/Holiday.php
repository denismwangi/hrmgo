<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use Uuid;

    protected $fillable = [
        'date',
        'occasion',
        'created_by',
    ];
}
