<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class CustomQuestion extends Model
{
    use Uuid;

    protected $fillable = [
        'question',
        'is_required',
        'created_by',
    ];

    public static $is_required = [
        'yes' => 'Yes',
        'no' => 'No',
    ];
}
