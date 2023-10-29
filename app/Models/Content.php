<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_type',
        'manufacturer',
        'discount',
        'file',
        'content',
        'old_price',
        'price_after_discount',
        'status'
        
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
