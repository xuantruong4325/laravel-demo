<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_company',
    ];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    protected $table = 'company';
}
