<div class="space-y-4" id="starting">
    <div class="max-w-screen-sm pt-2 px-2 space-y-4">
        <div class="space-y-2">
            <x-calculator-black/>
            <x-weeks-to-go text="Faltam semanas para as eleições. Para governar, é conveniente ter uma maioria.
            Escolha ou crie o seu próprio cenário"/>
        </div>

        <div class="space-y-4">
            <x-possible/>

            <div class="space-y-1 text-xs">
                <div class="flex flex-row space-x-1">
                    <x-starting.ps-rounded/>
                    <x-starting.plus/>

                    <div class="bg-yellow-400 py-0.5 rounded-3xl text-center text-white w-12">
                        PSD
                    </div>
                </div>

                <div class="space-y-1.5 ">
                    <div class="font-semibold">
                        {{ __('O Bloco central') }}
                    </div>

                    <div class="text-gray-500">
                        {{ __('Probabilidade: euromilhões') }}
                    </div>

                    <div>
                        {{ __('Uma reedição da década dos 80, em que Costa e Rio se teriam que entender sobre quem de facto
                            será primeiro ministro.') }}
                    </div>
                </div>
            </div>

            <div class="space-y-1 text-xs">
                <div class="flex flex-row space-x-1">
                    <x-starting.ps-rounded/>
                    <x-starting.plus/>

                    <div class="bg-red-500 py-0.5 rounded-3xl text-center text-white w-12">
                        PCP
                    </div>

                    <x-starting.plus/>

                    <div class="bg-yellow-600 py-0.5 rounded-3xl text-center text-white w-12">
                        BE
                    </div>
                </div>

                <div class="space-y-1.5 ">
                    <div class="font-semibold">
                        {{ __('Geringonça 2.0') }}
                    </div>

                    <div class="text-gray-500">
                        {{ __('Probabilidade: já se viu mais estranho') }}
                    </div>

                    <div>
                        {{ __('Não tendo havido acordo para o Orçamento de Estado, talvez se encontre acordo para uma
                            governação.') }}
                    </div>
                </div>
            </div>

            <div class="text-gray-500 text-xs">
                Para ver outras coligações possíveis, altere os cenários na barra em baixo.
            </div>
        </div>
    </div>

    <div class="max-w-screen-sm shadow-inner pl-2 pt-3 space-y-2">
        <div class="flex flex-row font-semibold">
            <div>
                {{ __('Cenários') }}
            </div>

            <div class="float-right pr-2 text-blue-300 text-right w-full">
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
                <div class="text-gray-500">32%</div>
                <div class="bg-pink-400 h-8"></div>
                <div class="font-semibold">PS</div>
            </div>
        </div>
    </div>
</div>