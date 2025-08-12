<?php

namespace App\Repositories\Interfaces;

use App\Models\Ekraf;
use App\Models\Submission;

interface EkrafRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, ?int $sector = null, ?int $district = null, ?int $status = null, int $perPage = 10);
    public function findByUserId($userId);
    public function findBySlug($slug);
    public function store(array $data);
    public function update(Ekraf $ekraf, array $data);
    public function createFromSubmission(Submission $submission): Ekraf;
}
