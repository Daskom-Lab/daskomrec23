<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;

    protected $table = 'statuses';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'isPass',
        'datacaas_id',
        'stages_id',
        'created_at',
        'updated_at',
    ];
}
