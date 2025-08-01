<?php

namespace App\Repositories;

use App\Models\Ekraf;
use App\Models\Submission;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\EkrafRepositoryInterface;

class EkrafRepository implements EkrafRepositoryInterface
{

    // public function searchAndPaginate(?string $search = null, ?int $sectorId = null, ?int $districtId = null, int $perPage = 12)
    // {
    //     return Ekraf::query()
    //         ->with(['user', 'sector', 'district', 'village'])
    //         ->when($search, function ($query, $search) {
    //             $query->where(function ($q) use ($search) {
    //                 $q->where('name', 'like', "%{$search}%")
    //                     ->orWhere('contact', 'like', "%{$search}%")
    //                     ->orWhere('manager', 'like', "%{$search}%")
    //                     ->orWhere('location', 'like', "%{$search}%");
    //             });
    //         })
    //         ->when($districtId, fn($query) => $query->where('district_id', $districtId))
    //         ->when($sectorId, fn($query) => $query->where('sector_id', $sectorId))
    //         ->orderBy('status', 'desc')
    //         ->paginate($perPage);
    // }

    public function findByUserId($userId)
    {
        return Ekraf::where('user_id', $userId)->first();
    }

    // public function store(array $data)
    // {
    //     return Ekraf::create($data);
    // }

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

    // public function create(array $data): Ekraf
    // {
    //     $data['slug'] = $data['slug'] ?? Str::slug($data['name']);

    //     // Simpan file logo jika ada
    //     if (isset($data['logo']) && $data['logo']->isValid()) {
    //         $data['logo'] = $data['logo']->store('ekrafs/logos', 'public');
    //     }

    //     // Simpan file cover jika ada
    //     if (isset($data['cover']) && $data['cover']->isValid()) {
    //         $data['cover'] = $data['cover']->store('ekrafs/covers', 'public');
    //     }

    //     return Ekraf::create($data);
    // }

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

    // public function delete(Ekraf $ekraf): bool
    // {
    //     // Hapus file logo dan cover jika ada
    //     if ($ekraf->logo && Storage::disk('public')->exists($ekraf->logo)) {
    //         Storage::disk('public')->delete($ekraf->logo);
    //     }

    //     if ($ekraf->cover && Storage::disk('public')->exists($ekraf->cover)) {
    //         Storage::disk('public')->delete($ekraf->cover);
    //     }

    //     return $ekraf->delete();
    // }
}
