<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCaas extends Model
{
    use HasFactory;

    protected $table = 'datacaas';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'email',
        'nim',
        'major',
        'class',
        'photo',
        'password',
    ];

    protected $hidden = [
        'email',
        'password',
        'remember_token',
    ];
}
