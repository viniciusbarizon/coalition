<div>
    <div class="{{ $backgroundLight }} h-100px relative text-gray-700">
        <div class="absolute bottom-0 w-full">
            <div class="text-center" id="{{ $id }}-percentage">
                {{ $percentage }}
            </div>

            @if($percentage != 100)
                <div class="{{ $background }} h-0.5" id="{{ $id }}-background"></div>
            @else
                <div class="{{ $background }} h-100px" id="{{ $id }}-background"></div>
            @endif
        </div>
    </div>

    <div class="font-semibold text-center">
        {{ $name }}
    </div>

    @if($id != 'others')
        <div class="border-2 font-bold mt-2 rounded-lg text-center text-gray-600 text-sm">
            <div class="border-b-2 cursor-pointer" id="{{ $id }}-increase" onclick="increase('{{ $id }}')">
                +
            </div>

            <div class="opacity-25 cursor-not-allowed" id="{{ $id }}-decrease" onclick="decrease('{{ $id }}')">
                -
            </div>
        </div>
    @endif
</div>
