<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // Variable defination
    public $title;
    public $subTitle;
    public $description;
    public function __construct($title, $subTitle, $description)
    {
        // Variable Initialization
        $this->title=$title;
        $this->subTitle=$subTitle;
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
