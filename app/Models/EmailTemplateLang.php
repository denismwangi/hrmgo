<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class EmailTemplateLang extends Model
{
    use Uuid;

    protected $fillable = [
        'parent_id',
        'lang',
        'subject',
        'content',
    ];
}
