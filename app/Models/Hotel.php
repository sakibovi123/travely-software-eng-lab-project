<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        "hotel_name", "opening", "closing", "review", "description", "image", "destination_id", "price"
    ];

    public function destinations()
    {
        return $this->belongsTo(Destination::class);
    }
}
