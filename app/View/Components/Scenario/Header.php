<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Header extends Component
{
    public string $action;
    public string $actionComponent;
    public string $description;
    public string $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $action, string $actionComponent, string $description, string $id)
    {
        $this->action = $action;
        $this->actionComponent = $actionComponent;
        $this->description = $description;
        $this->id = $id;
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
