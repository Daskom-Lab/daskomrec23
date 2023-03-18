<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassCheckMessage extends Model
{
    use HasFactory;

    protected $table = 'passcheckmessages';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'pass',
        'failed',
        'link',
        'created_at',
        'updated_at'
    ];
}
