<?php

namespace App\View\Components\search;

use Closure;
use App\Models\Sector;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SectorSearch extends Component
{
    public $sectors;
    public function __construct()
    {
        try {
            $this->sectors = Sector::all();
        } catch (\Exception $e) {
            $this->sectors = collect();
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.search.sector');
    }
}
