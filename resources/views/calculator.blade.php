<x-layout>
    {{-- <x-starting.main/> --}}

    <div class="opacity-25 pt-2 px-4 space-y-4" id="expanded">
        <x-header weeksToGo="Faltam poucas semanas para as eleições legislativas antecipadas.
            Estes são os cenários mais prováveis. Construa o seu."/>
    </div>

    <footer class="bottom-0 fixed h-36 pt-3 px-2 shadow-inner space-y-2 w-full">
        <x-scenario.header action="close" actionText="fechar"
            description="Escolha um dos cenários abaixo ou crie o seu próprio" svgComponent="scenario.choose.close"/>
        
        <div class="font-semibold space-y-4 text-xs">
            <div class="font-semibold">
                {{ __('Crie o seu próprio cenário') }}
            </div>
        </div>

        <div class="gap-x-2 grid grid-cols-8 text-xs w-60">
            <x-scenario.choose.ps/>
        </div>
    </footer>
</x-layout>
