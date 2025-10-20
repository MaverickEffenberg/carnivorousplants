<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'plant_id', 'message', 'rate'];

    // Each review belongs to a plant
    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    // Each review belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
