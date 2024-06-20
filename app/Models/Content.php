<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_type',
        'discount',
        'file',
        'sold',
        'content',
        'old_price',
        'price_after_discount',
        'status',
        'product_specifications',
        'product_reviews',
        'category_id',
        'company_id',
        'quantity',
        
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ndTechnique()
    {
        return $this->hasMany(NdTechnique::class);
    }

    public function imgaeProduct()
    {
        return $this->hasMany(ImageProduct::class);
    }
    public function endowProduct()
    {
        return $this->hasMany(endow_product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
