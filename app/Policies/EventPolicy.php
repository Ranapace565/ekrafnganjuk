<?php

namespace App\Policies;

use App\Models\User;

class EventPolicy
{
    public function create(User $user): bool
    {
        return in_array($user->role, ['entrepreneur', 'admin', 'dev']);
    }

    public function update(User $user): bool
    {
        return in_array($user->role, ['entrepreneur', 'admin', 'dev']);
    }
}
