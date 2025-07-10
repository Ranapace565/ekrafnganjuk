<?php

namespace App\View\Components\Forms;

use Closure;
use App\Models\District;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DistrictF extends Component
{
    public $districts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        try {
            $this->districts = District::all();
        } catch (\Exception $e) {
            $this->districts = collect(); // Supaya foreach tidak error jika gagal
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.district-f');
    }
}
