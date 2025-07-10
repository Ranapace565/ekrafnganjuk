<?php

namespace App\View\Components\sidebar;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class admin extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;
    public function __construct()
    {
        $this->user = Auth::user(); // ambil user yang sedang login
    }

    public function render(): View|Closure|string
    {
        return view('components.sidebar.admin', [
            'user' => $this->user
        ]);
    }
}
