<?php

namespace App\View\Components\search;

use Closure;
use App\Models\Sector;
use App\Models\District;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SecDis extends Component
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
        return view('components.search.sec-dis');
    }
}
