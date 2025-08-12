<?php

namespace App\Repositories;

use App\Models\Ekraf;
use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\EkrafRepositoryInterface;

class EkrafRepository implements EkrafRepositoryInterface
{

    public function searchAndPaginate(?string $search = null, ?int $sectorId = null, ?int $districtId = null, ?int $status = null, int $perPage = 12)
    {
        return Ekraf::query()
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
            ->when(is_numeric($status), fn($query) => $query->where('status', $status))
            ->orderBy('status', 'desc')
            ->paginate($perPage);
    }

    public function findByUserId($userId)
    {
        return Ekraf::where('user_id', $userId)->first();
    }

    public function findBySlug($slug)
    {
        return Ekraf::where('slug', $slug)->first();
    }

    public function createFromSubmission(Submission $submission): Ekraf
    {
        return Ekraf::create([
            'user_id' => $submission->user_id,
            'sector_id' => $submission->sector_id,
            'district_id' => $submission->district_id,
            'village_id' => $submission->village_id,
            'name' => $submission->name,
            'contact' => $submission->contact,
            'category' => $submission->category,
            'manager' => $submission->manager,
            'latitude' => $submission->latitude,
            'longitude' => $submission->longitude,
            'location' => $submission->location,
            'description' => $submission->description,
        ]);
    }

    public function store(array $data)
    {
        if (isset($data['logo']) && $data['logo']->isValid()) {
            $data['logo'] = $data['logo']->store('ekrafs/logos', 'public');
        }

        if (isset($data['cover']) && $data['cover']->isValid()) {
            $data['cover'] = $data['cover']->store('ekrafs/covers', 'public');
        }
        return Ekraf::create($data);
    }

    public function update(Ekraf $ekraf, array $data): Ekraf
    {

        if (isset($data['logo']) && $data['logo']->isValid()) {
            if ($ekraf->logo && Storage::disk('public')->exists($ekraf->logo)) {
                Storage::disk('public')->delete($ekraf->logo);
            }
            $data['logo'] = $data['logo']->store('ekrafs/logos', 'public');
        }

        if (isset($data['cover']) && $data['cover']->isValid()) {
            if ($ekraf->cover && Storage::disk('public')->exists($ekraf->cover)) {
                Storage::disk('public')->delete($ekraf->cover);
            }
            $data['cover'] = $data['cover']->store('ekrafs/covers', 'public');
        }

        $ekraf->update($data);
        return $ekraf;
    }
}
