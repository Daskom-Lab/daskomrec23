<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusStages extends Model
{
    use HasFactory;

    protected $table = 'statusstages';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'statusActive',
        'created_at',
        'updated_at',
    ];
}
