<?php

namespace App\Repositories;

use App\Models\Ekraf;
use App\Models\Submission;
use App\Repositories\Interfaces\SubmissionRepositoryInterface;

class SubmissionRepository implements SubmissionRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, ?int $sectorId = null, ?int $districtId = null, int $perPage = 12)
    {
        return Submission::query()
            ->with(['user', 'sector', 'district', 'village'])
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('contact', 'like', "%{$search}%")
                        ->orWhere('manager', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%");
                });
            })
            ->when($districtId, fn($query) => $query->where('district_id', $districtId))
            ->when($sectorId, fn($query) => $query->where('sector_id', $sectorId))
            ->orderBy('status', 'desc')
            ->paginate($perPage);
    }

    public function store(array $data)
    {
        return Submission::create($data);
    }

    public function update(Submission $submission, array $data): Submission
    {
        $submission->update($data);
        return $submission;
    }

    public function reject(Submission $submission, array $data): Submission
    {
        $submission->update($data);
        return $submission;
    }

    public function findByUserId($userId)
    {
        return Submission::where('user_id', $userId)->first();
    }

    public function findById($id)
    {
        return Submission::where('id', $id)->first();
    }

    public function existsForUser(int $userId): bool
    {
        return Submission::where('user_id', $userId)->exists();
    }

    public function destroy(Submission $submission): bool
    {
        return $submission->delete();
    }
}
