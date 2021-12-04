<div class="flex flex-row font-semibold">
    <div>
        {{ __('Cenários') }}
    </div>

    <div class="cursor-pointer pr-1 text-blue-300 text-right w-full" id="{{ $action }}-text">
        {{ __($actionText) }}
    </div>

    <div class="cursor-pointer pt-0.5 text-blue-300" id="{{ $action }}-svg">
        <x-dynamic-component component="{{ $svgComponent }}"/>
    </div>
</div>

<div class="text-xs">
    {{ __($description) }}
</div>
