<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'isAvailable',
        'image_url'
    ];

    protected $casts = [
        'isAvailable' => 'boolean',
        'price' => 'decimal:2'
    ];

    // One plant has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Accessor: formatted price (Rp)
    public function getFormattedPriceAttribute()
    {
        return 'Rp. ' . number_format($this->price, 0, ',', '.');
    }

    // Accessor: short description for cards
    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 60);
    }
}
