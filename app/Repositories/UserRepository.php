<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function update(User $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function findByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    // public function searchAndPaginate(?string $search = null, ?int $sectorId = null, ?int $districtId = null, int $perPage = 12)
    // {
    //     return User::query()
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

}
