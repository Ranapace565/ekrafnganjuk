<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Repositories\Interfaces\SectorRepositoryInterface;

class SectorService
{
    protected $sectorRepository;

    public function __construct(SectorRepositoryInterface $sectorRepository)
    {
        $this->sectorRepository = $sectorRepository;
    }

    public function getById($Id)
    {
        return $this->sectorRepository->findById($Id);
    }
}
