<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WarehouseCategory extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'warehouse_category', 'slug'
    ];
}
