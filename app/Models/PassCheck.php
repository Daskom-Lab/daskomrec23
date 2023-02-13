<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassCheck extends Model
{
    use HasFactory;

    protected $table = 'passcheck';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'isActiveCheck',
        'isPlotRun',
        'created_at',
        'updated_at'
    ];
}
