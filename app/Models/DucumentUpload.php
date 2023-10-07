<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class DucumentUpload extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'role',
        'document',
        'description',
        'created_by',
    ];

}
