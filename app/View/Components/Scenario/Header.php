<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Header extends Component
{
    public string $action;
    public string $actionText;
    public string $description;
    public string $svgComponent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $action, string $actionText, string $description, string $svgComponent)
    {
        $this->actionText = $actionText;
        $this->action = $action;
        $this->description = $description;
        $this->svgComponent = $svgComponent;
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
