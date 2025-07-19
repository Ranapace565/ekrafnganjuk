<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'sector_id',
        'district_id',
        'village_id',
        'name',
        'contact',
        'category',
        'manager',
        'proof',
        'latitude',
        'longitude',
        'location',
        'description',
        'note',
        'status',
    ];

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


    // metoode
    public static function hasSubmission(): bool
    {
        return self::where('user_id', Auth::id())->exists();
    }
}
