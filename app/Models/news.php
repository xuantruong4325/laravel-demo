<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'content_title',
        'avatar',
        'content',
    ];

    protected $table = 'news';
}
