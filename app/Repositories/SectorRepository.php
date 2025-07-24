<?php

namespace App\Repositories;

use App\Models\Sector;
use App\Repositories\Interfaces\SectorRepositoryInterface;

class SectorRepository implements SectorRepositoryInterface
{
    public function findById($Id)
    {
        return Sector::where('id', $Id)->first();
    }
}
