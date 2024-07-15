<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endow_product extends Model
{
    protected $fillable = [
        'content_id',
        'endow_id',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    protected $table = 'endow_products';
}
