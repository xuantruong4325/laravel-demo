<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameBank',
        'name',
        'account_number',
        'code_qr',
    ];

    protected $table = 'banks';
}
