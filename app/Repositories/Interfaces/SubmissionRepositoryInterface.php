<?php

namespace App\Repositories\Interfaces;

use App\Models\Submission;

interface SubmissionRepositoryInterface
{
    // public function getAll();
    // public function find($submissionId);
    public function searchAndPaginate(?string $search = null, ?int $sector = null, ?int $district, int $perPage = 10);
    public function findByUserId($userId);
    public function findById($id);
    public function store(array $data);
    public function existsForUser(int $userId): bool;
    public function update(Submission $submission, array $data);
    // public function reject(Submission $submission, array $data);
    // public function destroy($submissionId);
}
