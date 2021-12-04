<?php

namespace App\View\Components\Scenario;

use Illuminate\View\Component;

class PoliticalParty extends Component
{
    public string $name;
    public int $percentage;
    private string $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name, int $percentage, string $type)
    {
        $this->name = $name;
        $this->percentage = $percentage;
        $this->type = $type;
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
        return 'components.scenario.' . $this->type . '.political-party';
    }
}
