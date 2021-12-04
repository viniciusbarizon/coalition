<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Scenario extends Component
{
    public string $componentName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $componentName)
    {
        $this->componentName = $componentName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scenario.scenario');
    }
}
