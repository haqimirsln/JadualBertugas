<?php

namespace App\Livewire\Location\Tables;

use App\Livewire\BaseDataTable;
use App\Models\Location;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\ActionSize;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Grouping\Group;

class LocationTable extends BaseDataTable
{
    public function table(Table $table): Table
    {
        $form = [
            TextInput::make('name')->label('Nama Lokasi')->required(),
        ];

        return $table->query(Location::query()->orderBy('parent_id'))
            ->defaultSort('name', 'asc')
            ->heading('Senarai Lokasi')
            ->groups([
                Group::make('parentLocation.name')
                    ->label('Lokasi Induk')
                    ->collapsible()
            ])
            ->defaultGroup('parentLocation.name')
            ->columns([
                TextColumn::make('index')->label('#')->rowIndex(),
                TextColumn::make('name')->label('Lokasi'),
                TextColumn::make('childLocations.name')->label('Sublokasi')
            ])
            ->headerActions([
                CreateAction::make('add-sub-location')
                    ->model(Location::class)
                    ->label('Sublokasi')
                    ->icon('phosphor-plus')
                    ->color('info')
                    ->modalHeading('Tambah Sublokasi')
                    ->createAnother(false)
                    ->form([
                        TextInput::make('name')->label('Nama Sublokasi')->required(),
                        Radio::make('parent_id')
                            ->label('Lokasi Induk')
                            ->reactive()
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->options(Location::whereNull('parent_id')->pluck('name', 'id'))
                    ]),
                CreateAction::make('add-location')
                    ->model(Location::class)
                    ->label('Lokasi')
                    ->icon('phosphor-plus')
                    ->modalHeading('Tambah Lokasi')
                    ->createAnother(false)
                    ->form($form),
            ])->actions([
                EditAction::make()
                    ->form($form),
                DeleteAction::make()
            ])
        ;
    }
}
