<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_category',
    ];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    protected $table = 'category';
    
}
