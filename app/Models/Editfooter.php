<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editfooter extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_banner',
        'file_footer_left',
        'file_footer_right'
        
    ];
}
