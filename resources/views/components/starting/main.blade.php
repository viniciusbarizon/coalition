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

    <x-starting.scenarios/>
</div>