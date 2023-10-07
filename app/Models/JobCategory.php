<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use Uuid;

    protected $fillable = [
        'title',
        'created_by',
    ];
}
