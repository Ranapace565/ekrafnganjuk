<?php

namespace App\Policies;

use App\Models\Sector;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SectorPolicy
{
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'dev']);
    }

    public function update(User $user): bool
    {
        return in_array($user->role, ['admin', 'dev']);
    }

    public function destroy(User $user): bool
    {
        return in_array($user->role, ['admin', 'dev']);
    }
}
