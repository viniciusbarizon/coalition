<div>
    <div class="{{ $backgroundLight }} h-100px relative text-gray-700">
        <div class="absolute bottom-0 w-full">
            <div class="text-center">
                {{ $percentage }}
            </div>

            @if($percentage != 100)
                <div class="{{ $background }} h-0.5"></div>
            @else
                <div class="{{ $background }} h-24"></div>
            @endif
        </div>
    </div>

    <div class="font-semibold text-center">
        {{ $name }}
    </div>

    <div class="border-2 font-bold mt-2 rounded-lg text-center text-gray-600 text-sm">
        <div class="border-b-2">+</div>
        <div class="">-</div>
    </div>
</div>
