<footer class="bottom-0 fixed h-36 max-w-screen-sm shadow-inner pt-3 px-2 space-y-2 w-full">
    <div class="flex flex-row font-semibold">
        <div>
            {{ __('Cenários') }}
        </div>

        <x-scenarios.update/>
    </div>

    <div class="text-xs">
        {{ __('Resultado legislativas 2019') }}
    </div>

    <div class="gap-x-2 grid grid-cols-8 text-xs w-60">
        <x-scenarios.ps/>
        <x-scenarios.psd/>
        <x-scenarios.cds/>
        <x-scenarios.pcp/>
        <x-scenarios.be/>
        <x-scenarios.il/>
        <x-scenarios.c/>
        <x-scenarios.others/>
    </div>
</footer>
