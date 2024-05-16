<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    use HasFactory;
    protected $fillable = [
        'technique',
    ];

    protected $table = 'technique';

    public function ndTechnique()
    {
        return $this->hasMany(NdTechnique::class);
    }
}