<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Village extends Model
{
    use HasFactory;

    protected $fillable = ['district_id', 'name'];

    // Relasi: Village dimiliki oleh District
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
    public function ekrafs()
    {
        return $this->hasMany(Ekraf::class);
    }
}
