<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [
        'name',
        'avatar',
        'id_product',
        'price',
        'quantity',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
