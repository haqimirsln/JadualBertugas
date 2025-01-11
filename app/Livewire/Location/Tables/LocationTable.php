<?php

namespace App\Livewire\Location\Tables;

use App\Livewire\BaseDataTable;
use App\Models\Location;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class LocationTable extends BaseDataTable
{
    public function table(Table $table): Table
    {
        $form = [
            TextInput::make('name')->label('Lokasi')->required()
        ];

        return $table->query(Location::query()->latest())
            ->heading('Senarai Lokasi')
            ->columns([
                TextColumn::make('index')->label('#')->rowIndex(),
                TextColumn::make('name')->label('Lokasi')
            ])
            ->headerActions([
                CreateAction::make('add-location')
                    ->model(Location::class)
                    ->createAnother(false)
                    ->form($form)
            ])->actions([
                EditAction::make()
                    ->form($form),
                DeleteAction::make()
            ])
        ;
    }
}
