<?php

namespace App\Livewire\Duty\Tables;

use App\Livewire\BaseDataTable;
use App\Models\Duty;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DutyTable extends BaseDataTable
{

    public function table(Table $table): Table
    {
        $form = [
            TextInput::make('name')
                ->label('Tugas')
                ->required(),
            Select::make('locations')
                ->label('Lokasi')
                ->relationship('locations', 'name')
                ->preload()
                ->multiple()
                ->required()
        ];

        return $table->query(Duty::query()->latest())
            ->heading('Senarai Tugas')
            ->columns([
                TextColumn::make('index')->label('#')->rowIndex(),
                TextColumn::make('name')->label('Tugas'),
                TextColumn::make('locations.name')->label('Lokasi')
            ])
            ->headerActions([
                CreateAction::make()
                    ->model(Duty::class)
                    ->createAnother(false)
                    ->form($form)
            ])
            ->actions([
                EditAction::make()
                    ->form($form)
            ]);
    }
}
