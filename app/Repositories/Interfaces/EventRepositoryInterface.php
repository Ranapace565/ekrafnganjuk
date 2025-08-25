<?php

namespace App\Repositories\Interfaces;

use App\Models\User;
use App\Models\Ekraf;
use App\Models\Event;

interface EventRepositoryInterface
{
    public function searchAndPaginateAll(?string $search = null, ?int $sector = null, ?int $status = null, int $perPage = 10);
    public function searchAndPaginate(?string $search = null, ?int $sector = null, ?int $status = null, int $perPage = 10);
    public function store(array $data);
    public function findBySlug($slug);
    public function findByUser(User $user);
    public function update(Event $ekraf, array $data);
    public function destroy(Event $ekraf);
}
