<?php

namespace App\View\Components\search;

use Closure;
use App\Models\Sector;
use App\Models\District;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SecHorizontal extends Component
{
    public $sectors;
    public function __construct()
    {
        try {
            $this->sectors = Sector::all();
        } catch (\Exception $e) {
            $this->sectors = collect(); // Supaya foreach tidak error jika gagal
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.search.sec-horizontal');
    }
}
