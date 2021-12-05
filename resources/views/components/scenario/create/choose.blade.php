<div class="space-y-1.5 text-blue-400 text-xs">
    @foreach($scenarios as $key => $scenario)
        <div>
            <a href="#" onclick="setScenario('{{ $key }}')">
                {{ $scenario}}
            </a>
        </div>
    @endforeach
</div>
