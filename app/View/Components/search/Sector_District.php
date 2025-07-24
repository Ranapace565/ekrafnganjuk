<?php

namespace App\View\Components\search;

use Closure;
use App\Models\District;
use App\Models\Sector;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sector_District extends Component
{
    public $districts;
    public $sectors;
    public function __construct()
    {
        try {
            $this->districts = District::all();
            $this->sectors = Sector::all();
        } catch (\Exception $e) {
            $this->districts = collect(); // Supaya foreach tidak error jika gagal
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.search.sector_district');
    }
}
