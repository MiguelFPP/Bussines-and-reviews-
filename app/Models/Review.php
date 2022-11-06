<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'busines_id',
        'rating',
        'description',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
