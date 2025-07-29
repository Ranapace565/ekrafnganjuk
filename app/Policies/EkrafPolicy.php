<?php

namespace App\Policies;

use App\Models\Ekraf;
use App\Models\User;

class EkrafPolicy
{
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'dev']);
    }
    public function view(User $user, Ekraf $ekraf): bool
    {
        return $user->id === $ekraf->user_id
            || in_array($user->role, ['admin', 'dev']);
    }
    public function update(User $user, Ekraf $ekraf): bool
    {
        return $user->id === $ekraf->user_id || in_array($user->role, ['admin', 'dev']);
    }
}
