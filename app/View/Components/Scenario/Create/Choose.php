<?php

namespace App\View\Components\Scenario\Create;

use Illuminate\View\Component;

class Choose extends Component
{
    public array $scenarios;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->scenarios = [
            'Sondagem SIC/Expresso 31 dez 2021',
            'Sondagem TVI/CNN 12 jan 2022',
            'Resultado legislativas 2019',
            'Resultado legislativas 2015'
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.scenario.create.choose');
    }
}
