<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractAttechment extends Model
{
    use Uuid;

    protected $fillable = [
        'contract_id',
        'user_id',
        'files',
    ];
}
