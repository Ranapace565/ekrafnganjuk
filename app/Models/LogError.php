<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LogError extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'from', 'information'];
}
