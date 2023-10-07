<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'is_required',
        'created_by',
    ];
}
