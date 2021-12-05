<x-layout>
    {{-- <x-starting.main/> --}}

    <div class="opacity-25 pt-2 px-4 space-y-4" id="expanded">
        <x-header weeksToGo="Faltam poucas semanas para as eleições legislativas antecipadas.
            Estes são os cenários mais prováveis. Construa o seu."/>
    </div>

    <footer class="bottom-0 fixed h-60 pt-3 px-2 shadow-inner space-y-2 w-full">
        <x-scenario.header action="close" actionText="fechar"
            description="Escolha um dos cenários abaixo ou crie o seu próprio" svgComponent="scenario.choose.close"/>
        
        <div class="font-semibold space-y-4 text-xs">
            <div class="font-semibold">
                {{ __('Crie o seu próprio cenário') }}
            </div>
        </div>

        <div class="gap-x-2 grid grid-cols-8 text-xs">
            <x-scenario.choose.party background="bg-pink-400" backgroundLight="bg-pink-100" name="PS"
                percentage="0%"/>

            <x-scenario.choose.party background="bg-yellow-400" backgroundLight="bg-yellow-100" name="PSD"/>
            <x-scenario.choose.party background="bg-blue-400" backgroundLight="bg-blue-100" name="CDS" />
            <x-scenario.choose.party background="bg-red-600" backgroundLight="bg-red-100" name="PCP" />
            <x-scenario.choose.party background="bg-red-400" backgroundLight="bg-red-100" name="BE" />
        </div>
    </footer>
</x-layout>
