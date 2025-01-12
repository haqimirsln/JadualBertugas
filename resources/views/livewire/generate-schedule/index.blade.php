<div class="space-y-3">
    <div class="flex flex-col sm:flex-row space-y-3 sm:space-x-3 sm:items-end">
        <div class="sm:w-80" >
            {{ $this->form }}
        </div>
        <div class="self-end">
            <x-filament::button wire:click='generate'>
                Generate
            </x-filament::button>
        </div>
    </div>
</div>
