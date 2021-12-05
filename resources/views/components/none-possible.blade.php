<div class="space-y-4 hidden" id="none-possible">
    <div class="pt-2 px-4 space-y-4">
        <x-header weeksToGo="Faltam poucas semanas para as eleições legislativas antecipadas.
            Estes são os cenários mais prováveis. Construa o seu."/>

        <div class="space-y-4">
            <x-possible/>

            <div class="text-xs">
                {{ __('O cenário que criou não permite antever nenhuma coligação para um governo de maioria.
                    Seria algo inédito. Experimente criar um cenário mais provável.') }}
            </div>
        </div>
    </div>

    <x-scenario.year-2019.main/>
</div>
