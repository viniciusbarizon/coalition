<div>
    <div class="{{ $backgroundLight }} h-24 relative text-gray-700">
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
</div>
