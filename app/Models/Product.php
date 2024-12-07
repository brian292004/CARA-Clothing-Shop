<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
    ];
    // app/Models/Product.php

public function getDiscountedPriceAttribute()
{
    return $this->price * (1 - $this->discount / 100);
}
}
