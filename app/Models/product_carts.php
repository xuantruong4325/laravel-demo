<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_carts extends Model
{
    use HasFactory;
    protected $fillable = [
        'avatar',
        'nameProduct',
        'quantity',
        'price',
        'checkout_cart_id',
        'idProduct',
    ];

    public function checkoutCart()
    {
        return $this->belongsTo(checkoutCart::class);
    }

    protected $table = 'product_carts';
}
