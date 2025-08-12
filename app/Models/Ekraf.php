<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ekraf extends Model
{
    use HasFactory;

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
            if ($ekraf->isDirty('name')) {
                $baseSlug = Str::slug($ekraf->name);
                $slug = $baseSlug;
                $count = 1;

                while (Ekraf::where('slug', $slug)->where('id', '!=', $ekraf->id)->exists()) {
                    $slug = $baseSlug . '-' . $count++;
                }

                $ekraf->slug = $slug;
            }
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
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
