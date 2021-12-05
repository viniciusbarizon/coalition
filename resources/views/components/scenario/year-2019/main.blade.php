<footer class="bottom-0 fixed h-36 shadow-inner pt-3 px-2 space-y-2 w-full">
    <x-scenario.header
        action="update"
        actionText="alterar"
        description="Resultado legislativas 2019"
        svgComponent="scenario.update"/>

    <div class="gap-x-2 grid grid-cols-8 text-xs">
        <x-scenario.year-2019.party
            name="PS"
            percentage="32%"
            styles="bg-pink-400 h-8"/>

        <x-scenario.year-2019.party
            name="PSD"
            percentage="28"
            styles="bg-yellow-400 h-6"/>

        <x-scenario.year-2019.party
            name="CDS"
            percentage="12"
            styles="bg-blue-400 h-4"/>

        <x-scenario.year-2019.party
            name="PCP"
            percentage="12"
            styles="bg-red-600 h-4"/>

        <x-scenario.year-2019.party
            name="BE"
            percentage="8"
            styles="bg-red-400 h-2"/>

        <x-scenario.year-2019.party
            name="IL"
            percentage="3"
            styles="bg-blue-200 h-1"/>

        <x-scenario.year-2019.party
            name="C"
            percentage="3"
            styles="bg-gray-300 h-1"/>

        <x-scenario.year-2019.party
            name="..."
            percentage="3"
            styles="bg-gray-600 h-1"/>
    </div>
</footer>
