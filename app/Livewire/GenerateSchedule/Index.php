<?php

namespace App\Livewire\GenerateSchedule;

use App\Livewire\BaseForm;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Support\Carbon;

class Index extends BaseForm
{
    public function form(Form $form): Form
    {
        $months = [];

        foreach (range(1, 12) as $monthNumber) {
            $months[$monthNumber] = Carbon::createFromDate(null, $monthNumber, 1)->format('F');
        }

        return $form->statePath('data')
            ->schema([
                Select::make('month')
                    ->label('Months')
                    ->options($months)
                    ->native(false)

            ]);
    }

    public function render()
    {
        return view('livewire.generate-schedule.index');
    }
}
