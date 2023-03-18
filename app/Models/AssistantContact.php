<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistantContact extends Model
{
    use HasFactory;

    protected $table = 'assistantcontacts';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'photo',
        'ascod',
        'name',
        'nohp',
        'line',
        'instagram',
        'created_at',
        'updated_at'
    ];
}
