<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endows extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameEndow',
    ];

    protected $table = 'endows';

    public function endowProduct()
    {
        return $this->hasMany(endow_product::class);
    }
}
