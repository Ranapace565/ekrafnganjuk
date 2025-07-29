<?php

namespace App\Repositories\Interfaces;

use App\Models\Ekraf;
use App\Models\Submission;

interface EkrafRepositoryInterface
{
    public function findByUserId($userId);
    public function store(array $data);
    public function update(Ekraf $ekraf, array $data);
    public function createFromSubmission(Submission $submission): Ekraf;
}
