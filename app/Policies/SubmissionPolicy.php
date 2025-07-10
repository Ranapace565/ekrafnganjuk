<?php

namespace App\Policies;

use App\Models\Submission;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SubmissionPolicy
{
    public function create(User $user): bool
    {
        // Hanya boleh buat jika belum punya submission
        return !Submission::where('user_id', $user->id)->exists();
    }

    public function view(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id
            || in_array($user->role, ['admin', 'dev']);
    }

    public function update(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id;
    }

    public function updateStatus(User $user, Submission $submission): bool
    {
        return $user->role === in_array($user->role, ['admin', 'dev']);
    }

    public function delete(User $user, Submission $submission): bool
    {
        return $user->id === $submission->user_id // visitor pemilik
            || $user->role === 'admin'
            || $user->role === 'dev';
    }
}
