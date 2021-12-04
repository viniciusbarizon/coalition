<div class="max-w-screen-sm shadow-inner pt-3 px-2 space-y-2">
    <div class="flex flex-row font-semibold">
        <div>
            {{ __('Cenários') }}
        </div>

        <div class="pr-2 text-blue-300 text-right w-full">
            {{ __('alterar') }}
        </div>

        <div class="pt-0.5 text-blue-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </div>
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
</div>
