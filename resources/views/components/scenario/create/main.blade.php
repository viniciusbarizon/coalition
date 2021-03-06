<footer class="bottom-0 fixed h-auto px-2 py-4 shadow-inner space-y-4 w-full">
    <x-scenario.header
        action="closeExpanded"
        actionText="fechar"
        description="Escolha um dos cenários abaixo ou crie o seu próprio" svgComponent="scenario.create.close"/>

    <x-scenario.create.choose/>

    <div class="font-semibold pb-2 text-xs">
        {{ __('Crie o seu próprio cenário') }}
    </div>

    <div class="gap-x-2 grid grid-cols-8 text-xs">
        <x-scenario.create.party
            background="bg-pink-400"
            backgroundLight="bg-pink-100"
            id="ps"
            name="PS"
            percentage="0%"/>

        <x-scenario.create.party
            background="bg-yellow-400"
            backgroundLight="bg-yellow-100"
            id="psd"
            name="PSD"/>

        <x-scenario.create.party
            background="bg-blue-400"
            backgroundLight="bg-blue-100"
            id="cds"
            name="CDS"/>

        <x-scenario.create.party
            background="bg-red-600"
            backgroundLight="bg-red-100"
            id="pcp"
            name="PCP"/>

        <x-scenario.create.party
            background="bg-red-400"
            backgroundLight="bg-red-100"
            id="be"
            name="BE"/>

        <x-scenario.create.party
            background="bg-blue-200"
            backgroundLight="bg-blue-100"
            id="il"
            name="IL"/>

        <x-scenario.create.party
            background="bg-gray-300"
            backgroundLight="bg-gray-100"
            id="c"
            name="C"/>

        <x-scenario.create.party
            background="bg-gray-600"
            backgroundLight="bg-gray-100"
            id="others"
            name="..."
            percentage="100"/>
    </div>
</footer>
