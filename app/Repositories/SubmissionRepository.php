<?php

namespace App\Repositories;

use App\Models\Submission;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class SubmissionRepository implements SubmissionRepositoryInterface
{
    public function store(array $data)
    {
        return Submission::create($data);
    }

    public function findByUserId($userId)
    {
        return Submission::where('user_id', $userId)->first();
    }
    public function existsForUser(int $userId): bool
    {
        return Submission::where('user_id', $userId)->exists();
    }
}
