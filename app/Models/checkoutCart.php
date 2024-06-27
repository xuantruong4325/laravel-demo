<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkoutCart extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameUser',
        'phoneUser',
        'idUser',
        'payments',
        'totalProduct',
        'totalPrice',
        'order_status',
        'address',
    ];

    public function product_carts()
    {
        return $this->hasMany(product_carts::class);
    }

    protected $table = 'checkout_carts';
}
