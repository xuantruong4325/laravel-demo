<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technicaInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'technicaInformation',
        'tskt_id'
    ];

    public function tskt()
    {
        return $this->belongsToMany(tskt::class);
    }
}
