<?php

namespace App\View\Components\Scenario\WithResult;

use Illuminate\View\Component;

class PoliticalParty extends Component
{
    public int $percentage;
    public string $politicalParty;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $percentage, string $politicalParty)
    {
        $this->percentage = $percentage;
        $this->politicalParty = $politicalParty;
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
