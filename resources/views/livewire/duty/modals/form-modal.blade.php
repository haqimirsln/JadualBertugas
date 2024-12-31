
<div>
    <x-filament::modal id="duty-form-modal" slide-over sticky-header sticky-footer width="w-full">
        <x-slot name="heading">Senarai Tugas</x-slot>
        <livewire:duty.tables.duty-table />
    </x-filament::modal>
    <x-filament::modal id="pengguna-form-modal" slide-over sticky-header sticky-footer width="w-full">
        <x-slot name="heading">Senarai Pengguna</x-slot>
        <livewire:pengguna.tables.pengguna-tables />
    </x-filament::modal>
</div>
