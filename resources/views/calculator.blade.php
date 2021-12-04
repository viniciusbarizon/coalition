<x-layout>
    <div class="pt-2 px-2 space-y-4 w-full" id="starting">
        <div class="space-y-2">
            <div class="font-semibold h-6 text-xl">
                <div>{{ __('Calculador de coligações') }}</div>
            </div>

            <div class="text-xs">
                {{ __('Faltam semanas para as eleições. Para governar, é conveniente ter uma maioria.
                    Escolha ou crie o seu próprio cenário.')
                }}
            </div>
        </div>

        <div class="space-y-4">
            <div class="font-semibold text-sm">
                {{ __('Coligações possíveis')}}
            </div>

            <div>
                <div class="bg-pink-400 rounded-xl text-center text-sm text-white w-8">PS</div>
            </div>
        </div>
    </div>
</x-layout>
