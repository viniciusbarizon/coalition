<?php

namespace App\View\Components\Scenarios;

use Illuminate\View\Component;

class Percentage extends Component
{
    public int $number;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.starting.scenarios.percentage');
    }
}
