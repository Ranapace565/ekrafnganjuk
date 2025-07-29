<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'pos_code'];

    // Relasi: District memiliki banyak Village
    public function villages()
    {
        return $this->hasMany(Village::class);
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
