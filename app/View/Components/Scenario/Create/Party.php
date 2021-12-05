<?php

namespace App\View\Components\Scenario\Create;

use Illuminate\View\Component;

class Party extends Component
{
    public string $background;
    public string $backgroundLight;
    public string $name;
    public int|string $percentage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $background, string $backgroundLight, string $name, int|string $percentage = 0)
    {
        $this->background = $background;
        $this->backgroundLight = $backgroundLight;
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
        return view('components.scenario.create.party');
    }
}
