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
            '2015' => 'Resultado legislativas 2015',
            '2019' => 'Resultado legislativas 2019',
            'sic' => 'Sondagem SIC/Expresso 31 dez 2021',
            'tvi' => 'Sondagem TVI/CNN 12 jan 2022'
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
