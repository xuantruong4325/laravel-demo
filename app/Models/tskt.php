<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tskt extends Model
{
    use HasFactory;
    protected $fillable = [
        'technicaInformation_id',
        'content_id',
        'information'
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function technicaInformation()
    {
        return $this->belongsToMany(technicaInformation::class);
    }
}
