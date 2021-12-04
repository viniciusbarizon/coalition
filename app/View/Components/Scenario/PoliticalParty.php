<?php

namespace App\View\Components\Scenario\WithResult;

use Illuminate\View\Component;

class PoliticalParty extends Component
{
    public string $name;
    public int $percentage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, int $percentage)
    {
        $this->name = $name;
        $this->percentage = $percentage;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scenario.with-result.political-party');
    }
}
