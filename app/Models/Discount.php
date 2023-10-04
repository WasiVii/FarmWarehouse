<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'nama_diskon', 'diskon_type', 'diskon_fixed', 'diskon_percent', 'active'
    ];
}
