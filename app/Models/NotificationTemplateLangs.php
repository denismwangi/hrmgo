<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationTemplateLangs extends Model
{
    use Uuid;

    use HasFactory;

    protected $fillable = [
        'parent_id',
        'lang',
        'content',
        'variables',
        'created_by'
    ];
}
