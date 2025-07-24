<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictRepository implements DistrictRepositoryInterface
{
    public function findById($Id)
    {
        return District::where('id', $Id)->first();
    }
}
