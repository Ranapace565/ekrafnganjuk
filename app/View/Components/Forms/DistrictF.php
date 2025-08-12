<?php

namespace App\View\Components\Forms;

use Closure;
use App\Models\District;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DistrictF extends Component
{
    public $districts;
    public function __construct()
    {
        try {
            $this->districts = District::all();
        } catch (\Exception $e) {
            $this->districts = collect();
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.forms.district-f');
    }
}
