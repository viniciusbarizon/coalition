<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Header extends Component
{
    public string $actionComponent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $actionComponent)
    {
        $this->actionComponent = $actionComponent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scenario.header');
    }
}
