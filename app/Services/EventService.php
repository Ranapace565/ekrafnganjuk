<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Interfaces\EventRepositoryInterface;

class EventService
{
    protected $EventRepository;

    protected $userRepository;

    public function __construct(EventRepositoryInterface $EventRepository, UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->EventRepository = $EventRepository;
    }

    public function index(?string $search = null, ?int $sector = null, ?int $status = null)
    {
        return $this->EventRepository->searchAndPaginate($search, $sector, $status);
    }

    public function store(array $validated)
    {
        $user = Auth::user();
        $validated['user_id'] = $user->id;

        $ekraf = $this->EventRepository->store($validated);

        return $ekraf;
    }

    public function findBySlug($slug)
    {
        return $this->EventRepository->findBySlug($slug);
    }

    public function update(Event $Event, array $validated, $file = null)
    {
        $wasRejected = $Event->status === 0;
        $validated['status'] = 1;

        if ($file) {
            $slug = Str::slug($validated['title']);
            $ext = $file->getClientOriginalExtension();
            $filename = $slug . '-' . time() . '.' . $ext;

            $PosterPath = $file->storeAs('events/posters', $filename, 'public');

            $this->deletePosterFile($Event);

            $validated['poster'] = $PosterPath;
        }

        $Event = $this->EventRepository->update($Event, $validated);

        return $Event;
    }
    protected function deletePosterFile(Event $Event)
    {
        if ($Event->poster && Storage::disk('public')->exists($Event->poster)) {
            Storage::disk('public')->delete($Event->poster);
        }
    }

    public function destroy(Event $Event)
    {
        $this->deletePosterFile($Event);
        $this->EventRepository->destroy($Event);
    }
}
