<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class DataCaas extends Authenticatable
{
    use HasFactory;

    protected $table = 'datacaas';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'name',
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
