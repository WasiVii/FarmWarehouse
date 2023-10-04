<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'mitra_name', 'mitra_photo', 'mitra_description', 'slug', 'user_id'
    ];
}
