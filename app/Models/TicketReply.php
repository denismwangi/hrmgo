<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class TicketReply extends Model
{
    use Uuid;

    protected $fillable = [
        'employee_id',
        'user',
        'description',
        'created_by',
    ];

    public function users()
    {
        return $this->hasOne('App\Models\User', 'id', 'created_by');
    }
}
