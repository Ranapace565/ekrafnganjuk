<?php

namespace App\Policies;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SubmissionPolicy
{
    public function approve(User $user)
    {
        return in_array($user->role, ['admin', 'dev']);
    }
    public function create(User $user): bool
    {
        // Hanya boleh buat jika belum punya submission
        return !Submission::where('user_id', $user->id)->exists() || in_array($user->role, ['admin', 'dev']);
    }
    public function view(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id
            || in_array($user->role, ['admin', 'dev']);
    }

    public function update(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id || in_array($user->role, ['admin', 'dev']);
    }

    public function updateStatus(User $user, Submission $submission): bool
    {
        return in_array($user->role, ['admin', 'dev']);
    }

    public function delete(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id // visitor pemilik
            || $user->role === 'admin'
            || $user->role === 'dev';
    }
}
