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
        <div>
            <x-starting.scenarios.percentage number="32"/>

            <div class="bg-pink-400 h-8"></div>

            <x-starting.scenarios.political-party name="PS"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="28"/>

            <div class="bg-yellow-400 h-6"></div>

            <x-starting.scenarios.political-party name="PSD"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="12"/>

            <div class="bg-blue-400 h-4"></div>

            <x-starting.scenarios.political-party name="CDS"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="12"/>

            <div class="bg-red-500 h-4"></div>

            <x-starting.scenarios.political-party name="PCP"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="8"/>

            <div class="bg-yellow-600 h-2"></div>

            <x-starting.scenarios.political-party name="BE"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="3"/>

            <div class="bg-blue-200 h-1"></div>

            <x-starting.scenarios.political-party name="IL"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="3"/>

            <div class="bg-gray-300 h-1"></div>

            <x-starting.scenarios.political-party name="C"/>
        </div>

        <div class="self-end">
            <x-starting.scenarios.percentage number="3"/>

            <div class="bg-gray-600 h-1"></div>

            <x-starting.scenarios.political-party name="..."/>
        </div>
    </div>
</div>
