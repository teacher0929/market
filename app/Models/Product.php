<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected function casts()
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    // many to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // many to one
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
