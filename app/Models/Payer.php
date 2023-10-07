<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Payer extends Model
{
    use Uuid;

    protected $fillable = [
        'payer_name',
        'contact_number',
        'created_by',
    ];
}
