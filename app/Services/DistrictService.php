<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Repositories\Interfaces\DistrictRepositoryInterface;

class DistrictService
{
    protected $districtRepository;

    public function __construct(DistrictRepositoryInterface $districtRepository)
    {
        $this->districtRepository = $districtRepository;
    }

    public function getById($Id)
    {
        return $this->districtRepository->findById($Id);
    }
}
