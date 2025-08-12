<?php

namespace App\Repositories\Interfaces;

use App\Models\Ekraf;
use App\Models\Submission;
use App\Models\User;

interface UserRepositoryInterface
{
    // public function store(array $data);
    public function update(User $user, array $data);

    public function findByEmail($email);
}
