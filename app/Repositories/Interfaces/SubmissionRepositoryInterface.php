<?php

namespace App\Repositories\Interfaces;

interface SubmissionRepositoryInterface
{
    // public function getAll();
    // public function find($submissionId);
    public function findByUserId($userId);
    public function store(array $data);
    public function existsForUser(int $userId): bool;
    // public function update(array $data, $submissionId);
    // public function destroy($submissionId);
}
