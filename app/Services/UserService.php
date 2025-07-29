<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $UserRepository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }

    public function update(User $user, array $data)
    {
        $user = $this->UserRepository->update($user, $data);
        return $user;
    }
}
