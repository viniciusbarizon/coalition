<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Scenario extends Component
{
    public string $nameComponent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $nameComponent)
    {
        $this->nameComponent = $nameComponent;
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
