<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone',
        'rating',
        'image_url',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'busines_id', 'id');
    }
}
