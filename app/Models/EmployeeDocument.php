<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class EmployeeDocument extends Model
{
    use Uuid;

    protected $fillable = [
        'employee_id','document_id','document_value','created_by'
    ];
}
