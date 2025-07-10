<?php

namespace App\View\Components\rolebar;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class entrepreneur extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;

    public function __construct()
    {
        $this->user = Auth::user(); // ambil user yang sedang login
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rolebar.entrepreneur', [
            'user' => $this->user
        ]);
    }
}
