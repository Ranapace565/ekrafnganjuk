<?php

namespace App\View\Components\forms;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryF extends Component
{
    public $categories;
    public function __construct()
    {
        try {
            $this->categories = Category::all();
        } catch (\Exception $e) {
            $this->categories = collect();
        }
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.category-f', [
            'categories' => $this->categories
        ]);
    }
}
