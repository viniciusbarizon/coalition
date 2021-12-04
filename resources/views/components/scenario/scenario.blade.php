<div class="flex flex-row font-semibold">
    <div>
        {{ __('Cenários') }}
    </div>

    <x-scenario.with-result.update />
    <x-dynamic-component :component="$componentName"/>
</div>