<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'ekraf_id',
        'name',
        'slug',
        'price',
        'description'
    ];

    protected static function booted()
    {
        static::creating(function ($Product) {
            $baseSlug = Str::slug($Product->name);
            $slug = $baseSlug;
            $count = 1;

            while (Product::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            $Product->slug = $slug;
            // $Product->slug = Str::slug($Product->name);

        });

        static::updating(function ($Product) {
            if ($Product->isDirty('name')) {
                $baseSlug = Str::slug($Product->name);
                $slug = $baseSlug;
                $count = 1;

                while (Product::where('slug', $slug)->where('id', '!=', $Product->id)->exists()) {
                    $slug = $baseSlug . '-' . $count++;
                }

                $Product->slug = $slug;
            }
        });
    }
    public function images()
    {
        return $this->hasMany(Productimg::class);
    }
    public function ekraf()
    {
        return $this->belongsTo(Ekraf::class);
    }
}
