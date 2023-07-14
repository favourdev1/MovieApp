<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class playCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $date;
    public $title;
    public $starttime;
    public $imgUrl;
    public $endtime;
    public function __construct($title, $date, $starttime, $endtime, $imgUrl)
    {
        $this->title = $title;
        $this->date = $date;
        $this->starttime = $starttime;
        $this->endtime = $endtime;
        $this->imgUrl = $imgUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.play-card');
    }
}