<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class Year2019 extends Component
{
    public string $name;
    public int $percentage;
    public string $styles;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, int|string $percentage, string $styles)
    {
        $this->name = $name;
        $this->percentage = $percentage;
        $this->styles = $styles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view($this->getViewPath());
    }

    private function getViewPath(): string
    {
        return 'components.scenario.year-2019.political-party';
    }
}
