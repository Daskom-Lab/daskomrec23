<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    use HasFactory;

    protected $table = 'stages';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'stagesname',
        'statusActive',
        'created_at',
        'updated_at',
    ];
}
