<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'file',
        'content',
        'author',
        'status',

    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
