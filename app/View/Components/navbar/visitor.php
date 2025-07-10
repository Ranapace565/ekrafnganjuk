<?php

namespace App\View\Components\navbar;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class visitor extends Component
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
        return view('components.navbar.visitor', [
            'user' => $this->user
        ]);
    }
}
