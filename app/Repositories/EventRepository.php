<?php

namespace App\Repositories;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventRepository implements EventRepositoryInterface
{
    public function searchAndPaginateAll(?string $search = null, ?int $sectorId = null, ?int $status = null, int $perPage = 12)
    {
        return Event::query()
            ->with(['user', 'sector'])
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%");
                });
            })
            ->when($sectorId, fn($query) => $query->where('sector_id', $sectorId))
            ->when(is_numeric($status), fn($query) => $query->where('status', $status))
            ->orderBy('status', 'asc')
            ->paginate($perPage);
    }
    public function searchAndPaginate(?string $search = null, ?int $sectorId = null, ?int $status = null, int $perPage = 12)
    {
        return Event::query()
            ->with(['user', 'sector'])
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%");
                });
            })
            ->when($sectorId, fn($query) => $query->where('sector_id', $sectorId))
            ->when(is_numeric($status), fn($query) => $query->where('status', $status))
            ->where('user_id', Auth::user()->id)
            ->orderBy('status', 'asc')
            ->paginate($perPage);
    }
    public function store(array $data)
    {
        if (isset($data['poster']) && $data['poster']->isValid()) {
            $data['poster'] = $data['poster']->store('events/posters', 'public');
        }
        return Event::create($data);
    }

    public function findBySlug($slug)
    {
        return Event::where('slug', $slug)->first();
    }

    public function update(Event $event, array $data): Event
    {
        $event->update($data);
        return $event;
    }

    public function destroy(Event $Event): bool
    {
        return $Event->delete();
    }
}
