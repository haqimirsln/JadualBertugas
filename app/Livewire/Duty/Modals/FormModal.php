<?php

namespace App\Livewire\Duty\Modals;

use Livewire\Attributes\On;
use Livewire\Component;

class FormModal extends Component
{
    #[On('tugas')]
    public function tugas()
    {
        $this->dispatch('open-modal', id: 'duty-form-modal');
    }

    #[On('lokasi')]
    public function lokasi()
    {
        $this->dispatch('open-modal', id: 'lokasi-form-modal');
    }

    #[On('pengguna')]
    public function pengguna()
    {
        $this->dispatch('open-modal', id: 'pengguna-form-modal');
    }

    public function render()
    {
        return view('livewire.duty.modals.form-modal');
    }
}
