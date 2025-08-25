<?php

namespace App\Repositories;

use App\Models\Sector;
use App\Repositories\Interfaces\SectorRepositoryInterface;

class SectorRepository implements SectorRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, int $perPage = 12)
    {
        return Sector::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
            })
            ->orderBy('name', 'asc')
            ->paginate($perPage);
    }
    public function findById($Id)
    {
        return Sector::where('id', $Id)->first();
    }
    public function store(array $data): Sector
    {
        if (isset($data['icon']) && $data['icon']->isValid()) {
            $data['icon'] = $data['icon']->store('sectors/icons', 'public');
        }
        return Sector::create($data);
    }
    public function update(Sector $sector, array $data)
    {
        $sector->update($data);
        return $sector;
    }
    public function destroy(Sector $sector)
    {
        return $sector->delete();
    }
}
