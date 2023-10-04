<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'warehouse_name', 'slug', 'mitra_id', 'warehouse_description', 'warehouse_category_id', 'warehouse_address', 
        'stock_in_warehouse', 'unit', 'rent_price_per_unit', 'manage_product_price'
    ];
}
