<?php

namespace App\Repositories\Interfaces;

use App\Models\Sector;

interface SectorRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, int $perPage = 10);
    public function findById($Id);
    public function store(array $data): Sector;
    // public function storeImages(Sector $sector, array $images): void;
    public function update(Sector $sector, array $data);
    // public function deleteImages(Sector $sector, array $images);
    public function destroy(Sector $sector);
}
