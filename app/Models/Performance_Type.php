<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance_Type extends Model
{
    use Uuid;

    // use HasFactory;

    protected $fillable = [
        'name',
        // 'type',
        'created_by',
    ];

    public function types()
    {
        return $this->hasMany('App\Models\Competencies', 'type', 'id');
    }
}
