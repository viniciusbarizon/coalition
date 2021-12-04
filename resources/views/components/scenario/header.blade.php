<div class="flex flex-row font-semibold">
    <div>
        {{ __('Cenários') }}
    </div>

    <div class="cursor-pointer pr-2 text-blue-300 text-right w-full" id="{{ $id }}">
        {{ __($action) }}
    </div>

    <x-dynamic-component component="{{ $actionComponent }}"/>
</div>

<div class="text-xs">
    {{ __($description) }}
</div>
