<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'klien_name', 'klien_photo', 'slug', 'contact', 'user_id'
    ];
}
