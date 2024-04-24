<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content_id',
    ];


    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    protected $table = 'image_product';
}
