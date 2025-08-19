<?php

namespace App\View\Components\search;

use App\Models\Event;
use App\Repositories\EventRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class eventCard extends Component
{

    public $events;
    public function __construct(EventRepository $eventRepository)
    {
        try {
            // Ambil event default, limit 5
            $this->events = $eventRepository->searchAndPaginateAll(null, null, 2);
        } catch (\Exception $e) {
            $this->events = collect();
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.search.event-card');
    }
}
