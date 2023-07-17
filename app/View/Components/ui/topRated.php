<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Faker\Factory;
class topRated extends Component
{
    /**
     * Create a new component instance.
     */

     public $title;
     public $description;
     public $imgUrl;
     public $rating;
     public function __construct($title, $description, $imgUrl)
     {
         $this->title = $title;
         $this->description = $description;
         $this->imgUrl = $imgUrl;
         $this->rating = Factory::create()->randomFloat(2, 6, 8);
 
 
     }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.top-rated');
    }
}
