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

        {{-- <x-filament::modal id="pengguna-form-modal" slide-over sticky-header sticky-footer width="w-full">
            <x-slot name="heading">Senarai Pengguna</x-slot>
            <x-slot name="trigger">
                <x-filament::button color="success">
                    Senarai Pengguna
                </x-filament::button>
            </x-slot>
            <livewire:pengguna.tables.pengguna-tables /
        </x-filament::modal> --}}


    </div>
    <livewire:duty.modals.form-modal />
    <x-filament-actions::modals />
</div>
