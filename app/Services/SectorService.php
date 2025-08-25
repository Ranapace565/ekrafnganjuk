<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Models\Sector;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\SectorRepositoryInterface;

class SectorService
{
    protected $sectorRepository;

    public function __construct(SectorRepositoryInterface $sectorRepository)
    {
        $this->sectorRepository = $sectorRepository;
    }

    public function index(?string $search = null)
    {
        return $this->sectorRepository->searchAndPaginate($search);
    }

    public function store(array $validated)
    {
        $sector = $this->sectorRepository->store($validated);

        return $sector;
    }

    public function getById($Id)
    {
        return $this->sectorRepository->findById($Id);
    }

    public function update(Sector $Sector, array $validated, $file = null)
    {

        if ($file) {
            $slug = Str::slug($validated['name']);
            $ext = $file->getClientOriginalExtension();
            $filename = $slug . '-' . time() . '.' . $ext;

            $PosterPath = $file->storeAs('sectors/icons', $filename, 'public');

            $this->deleteIconFile($Sector);

            $validated['icon'] = $PosterPath;
        }

        $Sector = $this->sectorRepository->update($Sector, $validated);

        return $Sector;
    }
    protected function deleteIconFile(Sector $Sector)
    {
        if ($Sector->icon && Storage::disk('public')->exists($Sector->icon)) {
            Storage::disk('public')->delete($Sector->icon);
        }
    }

    public function destroy(Sector $Sector)
    {
        $this->deleteIconFile($Sector);
        $this->sectorRepository->destroy($Sector);
    }
}
