<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    // one to many
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
