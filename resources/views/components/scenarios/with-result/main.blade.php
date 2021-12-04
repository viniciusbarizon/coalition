<footer class="bottom-0 fixed h-36 shadow-inner pt-3 px-2 space-y-2 w-full">
    <div class="flex flex-row font-semibold">
        <x-scenarios.scenarios/>
        <x-scenarios.with-result.update id="update" />
    </div>

    <div class="text-xs">
        {{ __('Resultado legislativas 2019') }}
    </div>

    <div class="gap-x-2 grid grid-cols-8 text-xs w-60">
        <x-scenarios.with-result.ps/>
        <x-scenarios.with-result.psd/>
        <x-scenarios.with-result.cds/>
        <x-scenarios.with-result.pcp/>
        <x-scenarios.with-result.be/>
        <x-scenarios.with-result.il/>
        <x-scenarios.with-result.c/>
        <x-scenarios.with-result.others/>
    </div>
</footer>
