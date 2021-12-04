<div class="space-y-4" id="starting">
    <div class="max-w-screen-sm pt-2 px-4 space-y-4">
        <div class="space-y-2">
            <x-coalition-calculator/>
            <x-weeks-to-go text="Faltam semanas para as eleições. Para governar, é conveniente ter uma maioria.
                Escolha ou crie o seu próprio cenário"/>
        </div>

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

    <x-scenarios.with-result.main/>
</div>
