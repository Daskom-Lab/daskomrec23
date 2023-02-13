<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlotActives extends Model
{
    use HasFactory;

    protected $table = 'plotactives';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'isPlotActive',
        'dataacaas_id',
        'created_at',
        'updated_at',
    ];
}
