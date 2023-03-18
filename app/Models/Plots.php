<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plots extends Model
{
    use HasFactory;

    protected $table = 'plots';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'isPlotActive',
        'datacaas_id',
        'shifts_id',
        'created_at',
        'updated_at',
    ];
}
