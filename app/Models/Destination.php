<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        "destination_name", "thumbnail"
    ];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }
}
