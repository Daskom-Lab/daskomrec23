<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    use HasFactory;

    protected $table = 'shifts';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'shiftname',
        'day',
        'time_start',
        'time_end',
        'quota',
        'created_at',
        'updated_at',
    ];
}
