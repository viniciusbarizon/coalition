<?php

namespace App\View\Components\Starting\Scenarios;

use Illuminate\View\Component;

class PoliticalParty extends Component
{
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.starting.scenarios.political-party');
    }
}
