<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editfooter extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_banner1',
        'file_banner2',
        'file_banner3',
        'file_banner4',
        'file_footer_left',
        'file_footer_right'
        
    ];
}
