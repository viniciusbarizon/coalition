<?php

namespace App\View\Components\Scenario\Choose;

use Illuminate\View\Component;

class Main extends Component
{
    public string $backgroundWeak;
    public string $backgroundStrong;
    public string $name;
    public int|string $percentage;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $backgroundStrong, string $backgroundWeak, string $name, int|string $percentage)
    {
        $this->backgroundStrong = $backgroundStrong;
        $this->backgroundWeak = $backgroundWeak;
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
        return view('components.scenario.choose.party');
    }
}
