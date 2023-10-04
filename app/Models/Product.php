<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'product_photo', 'product_name', 'slug', 'product_description', 'product_category_id', 'stock', 
        'product_unit', 'price_per_unit', 'discount_id', 'user_id', 'warehouse_id', 'product_status_id'
    ];
}
