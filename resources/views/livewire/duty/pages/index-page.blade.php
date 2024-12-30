<div>
    <div class="text-right">
        <x-filament::button wire:click="create" color="primary">
            Senarai Tugas
        </x-filament::button>
        <x-filament::button wire:click="" color="warning">
            Senarai Lokasi
        </x-filament::button>
        <x-filament::button wire:click="create" color="success">
            Senarai Pengguna
        </x-filament::button>
    </div>
    <livewire:duty.modals.form-modal />
    <x-filament-actions::modals />
</div>
