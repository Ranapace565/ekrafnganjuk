<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'sector_id',
        'title',
        'slug',
        'poster',
        'start_date',
        'end_date',
        'latitude',
        'longitude',
        'location',
        'description',
        'status',
        'note',
    ];

    protected static function booted()
    {
        static::creating(function ($Event) {
            $baseSlug = Str::slug($Event->title);
            $slug = $baseSlug;
            $count = 1;

            while (Event::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $count++;
            }

            $Event->slug = $slug;
        });

        static::updating(function ($Event) {
            if ($Event->isDirty('title')) {
                $baseSlug = Str::slug($Event->title);
                $slug = $baseSlug;
                $count = 1;

                while (Event::where('slug', $slug)->where('id', '!=', $Event->id)->exists()) {
                    $slug = $baseSlug . '-' . $count++;
                }

                $Event->slug = $slug;
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
}
