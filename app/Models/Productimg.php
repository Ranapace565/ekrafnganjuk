<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productimg extends Model
{
    protected $fillable = [
        'image_path'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
