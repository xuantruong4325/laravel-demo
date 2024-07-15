<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NdTechnique extends Model
{
    protected $fillable = [
        'nameTechnique',
        'content_id',
        'technique_id',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    protected $table = 'nd_techniques';
}
