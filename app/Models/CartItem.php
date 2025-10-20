<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plant_id',
        'quantity',
        'notes',
    ];

    // Relationships

    // Each cart item belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Each cart item belongs to a plant
    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }
}
