<?php

namespace App\Livewire\StaffDuty;

use App\Livewire\BaseDataTable;
use App\Models\StaffDuty;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DataTable extends BaseDataTable
{

    public function table(Table $table): Table
    {
        return $table
            ->query(StaffDuty::query()->latest())
            ->heading('Senarai Tugas Setiap Kakitangan')
            ->modelLabel('Tugas-tugas Kakitangan')
            ->columns([
                TextColumn::make('staff.name')
                    ->label('Kakitangan')
            ]);
    }
}
