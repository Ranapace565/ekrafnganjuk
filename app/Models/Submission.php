<?php

namespace App\Models;

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
