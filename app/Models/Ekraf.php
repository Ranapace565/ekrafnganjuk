<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{
    protected static function booted()
    {
        static::creating(function ($ekraf) {
            $baseSlug = Str::slug($ekraf->name);
            $slug = $baseSlug;
            $count = 1;

            while (Ekraf::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            $ekraf->slug = $slug;
            // $ekraf->slug = Str::slug($ekraf->name);

        });

        static::updating(function ($ekraf) {
            $baseSlug = Str::slug($ekraf->name);
            $slug = $baseSlug;
            $count = 1;

            while (Ekraf::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            $ekraf->slug = $slug;
        });
    }
}
