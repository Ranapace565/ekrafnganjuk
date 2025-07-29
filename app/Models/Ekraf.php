<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Ekraf extends Model
{

    protected $fillable = [
        'user_id',
        'sector_id',
        'district_id',
        'village_id',
        'name',
        'slug',
        'contact',
        'category',
        'manager',
        'logo',
        'cover',
        'latitude',
        'longitude',
        'location',
        'description',
        'status',
        'active',
        'note',
        'male',
        'female'
    ];
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
