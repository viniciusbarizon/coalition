<div class="space-y-4" id="starting">
    <div class="pt-2 px-4 space-y-4">
        <x-header weeksToGo="Faltam semanas para as eleições. Para governar, é conveniente ter uma maioria.
            Escolha ou crie o seu próprio cenário."/>

        <div class="space-y-4">
            <x-possible/>
            <x-starting.central-block/>

            {{-- Geringonça 2.0 --}}
            <x-starting.contraption/>

            <div class="text-gray-500 text-xs">
                {{ __('Para ver outras coligações possíveis, altere os cenários na barra em baixo') }}.
            </div>
        </div>
    </div>

    <x-scenario.year-2019.main/>
</div>
