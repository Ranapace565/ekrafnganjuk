<?php

namespace App\View\Components\sidebar;

use Closure;
use App\Models\Ekraf;
use App\Models\Event;
use App\Models\Submission;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Admin extends Component
{
    public $submission;
    public $resubmissionEkraf;

    public $reportedEkraf;

    public $submissionEvent;

    public function __construct()
    {
        try {
            $this->submission = Submission::all()->count();

            $this->resubmissionEkraf = Ekraf::where('status',1)->count();

            // $this->reportedEkraf = Ekraf::where('status', 0);

            $this->submissionEvent = Event::where('status',0)->count();

        } catch (\Exception $e) {
            $this->submission = collect(); // Supaya foreach tidak error jika gagal
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.sidebar.admin');
    }
}
