<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use Uuid;

    protected $fillable = [
        'department_id','name','created_by'
    ];
}
