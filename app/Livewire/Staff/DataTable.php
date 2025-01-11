<?php

namespace App\Livewire\Staff;

use App\Livewire\BaseDataTable;
use App\Models\Location;
use App\Models\Staff;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DataTable extends BaseDataTable
{
    public function table(Table $table): Table
    {
        return $table
            ->query(Staff::query()->latest())
            ->heading('Senarai Kakitangan')
            ->modelLabel('Kakitangan')
            ->columns([
                TextColumn::make('index')
                    ->label('#')
                    ->rowIndex(),
                TextColumn::make('name')
                    ->label('Nama'),
                TextColumn::make('location.name')
                    ->label('Lokasi Bekerja'),
                TextColumn::make('duties.name')
                    ->label('Tugasan')
            ])
            ->actions([
                EditAction::make('edit-staff')
                    ->form([
                        Grid::make(2)
                        ->schema([
                            TextInput::make('name')
                            ->label('Nama')
                            ->required(),
                        Radio::make('location_id')
                            ->label('Lokasi Bekerja')
                            ->reactive()
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->options(Location::pluck('name', 'id')->toArray())
                        ]),
                        Select::make('duties')
                            ->label('Tugas-tugas')
                            ->preload()
                            ->relationship('duties', 'name')
                            ->multiple()
                            ->searchable()
                            ->hint('Pastikan lokasi kakitangan telah ditetapkan.')
                            ->disabled(fn(Get $get): bool => $get('location_id') == '')
                    ])
            ])
        ;
    }
}
