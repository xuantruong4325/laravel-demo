<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conscious extends Model
{
    use HasFactory;
    protected $fillable = [
        'consciouse',
        'code_consciouse',
    ];
    protected $table = 'consciouses';
}
