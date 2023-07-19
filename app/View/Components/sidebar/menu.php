<?php

namespace App\View\Components\sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menu extends Component
{
    /**
     * Create a new component instance.
     */
    public  $hasLine = true;
    public function __construct($hasLine = null)
    {
        $this->hasLine= $hasLine;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.menu');
    }
}
