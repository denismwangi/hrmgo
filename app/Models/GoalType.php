<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class GoalType extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'created_by',
    ];
}
