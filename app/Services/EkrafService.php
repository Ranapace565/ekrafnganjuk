<?php

namespace App\Services;

use App\Models\Ekraf;
use App\Repositories\EkrafRepository;
use Illuminate\Support\Str;

class EkrafService
{
    protected $repository;

    public function __construct(EkrafRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createEkraf(array $data): Ekraf
    {
        return $this->repository->create($data);
    }

    public function update(Ekraf $ekraf, array $data): Ekraf
    {
        return $this->repository->update($ekraf, $data);
    }

    public function deleteEkraf(Ekraf $ekraf): bool
    {
        return $this->repository->delete($ekraf);
    }
}
