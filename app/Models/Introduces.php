<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introduces extends Model
{
    use HasFactory;

    protected $fillable = [
        'general_info',
        'aditional_info',
    ];
}
