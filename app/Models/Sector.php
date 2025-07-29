<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sector extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'icon'];

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }

    public function ekrafs()
    {
        return $this->hasMany(Ekraf::class);
    }
}
