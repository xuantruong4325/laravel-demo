<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communes extends Model
{
    use HasFactory;

    protected $fillable = [
        'commune',
        'code_commune',
        'district_code',
    ];

    protected $table = 'communes';
}
