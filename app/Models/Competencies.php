<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Competencies extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'type',
        'created_by',
    ];

    // public static $types = [
    //     'technical' => 'Technical',
    //     'organizational' => 'Organizational',
    //     'behavioural' => 'Behavioural',
    // ];

    public function getPerformance_type()
    {
        return $this->hasOne('App\Models\Performance_Type', 'id', 'type');
    }
}
