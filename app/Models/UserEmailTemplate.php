<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class UserEmailTemplate extends Model
{
    use Uuid;

    protected $fillable = [
        'template_id',
        'user_id',
        'is_active',
    ];
}
