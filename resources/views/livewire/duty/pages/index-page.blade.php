<div>
    <div class="text-right">
        <x-filament::button wire:click="create">
            Senarai Tugas
        </x-filament::button>
        <x-filament::button wire:click="">
            Senarai Lokasi
        </x-filament::button>
        <x-filament::button wire:click="create">
            Senarai Pengguna
        </x-filament::button>
    </div>
    <livewire:duty.modals.form-modal />
    <x-filament-actions::modals />
</div>
