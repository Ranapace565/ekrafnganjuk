<?php

namespace App\View\Components\sidebar;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class entrepreneur extends Component
{
    public $eventReject;
    public function __construct()
    {
        try {
            $this->eventReject = Event::where('user_id', Auth::id())
    ->where('status', 0)
    ->count();

        } catch (\Exception $e) {
            $this->eventReject = collect(); // Supaya foreach tidak error jika gagal
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.sidebar.entrepreneur');
    }
}
