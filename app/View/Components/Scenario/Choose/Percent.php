<?php

namespace App\View\Components\Scenario\Choose;

use Illuminate\View\Component;

class Percent extends Component
{
    public int|string $percent;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int|string $percent)
    {
        $this->percent = $percent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scenario.choose.percent');
    }
}
