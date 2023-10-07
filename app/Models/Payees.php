<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Payees extends Model
{
    use Uuid;

    protected $fillable = [
        'payee_name',
        'contact_number',
        'created_by',
    ];
}
