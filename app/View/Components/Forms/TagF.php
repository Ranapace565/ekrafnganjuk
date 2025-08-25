<?php

namespace App\View\Components\forms;

use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TagF extends Component
{
    public $tags;
    public function __construct()
    {
        try {
            $this->tags = Tag::all();
        } catch (\Exception $e) {
            $this->tags = collect();
        }
    }
    public function render(): View|Closure|string
    {
        return view('components.forms.tag-f', [
            'sectors' => $this->tags
        ]);
    }
}
