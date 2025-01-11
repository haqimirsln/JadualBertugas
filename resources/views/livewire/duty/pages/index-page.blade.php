<div>
    <div class="text-right">
        <x-filament::button wire:click="tugas" color="primary">
            Senarai Tugas
        </x-filament::button>
        <x-filament::button wire:click="lokasi" color="warning">
            Senarai Lokasi
        </x-filament::button>



        <x-filament::button wire:click="pengguna" color="success">
            Senarai Pengguna 1
        </x-filament::button>
    </div>
    <livewire:duty.modals.form-modal />
    <x-filament-actions::modals />
</div>
