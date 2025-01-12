<?php

namespace App\Livewire\Duties;

use App\Livewire\BaseDataTable;
use App\Models\Duty;
use App\Models\Location;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\Database\Eloquent\Builder;

class DataTable extends BaseDataTable
{

    public function table(Table $table): Table
    {
        $form = [
            TextInput::make('name')
                ->label('Tugas')
                ->required(),
            Select::make('locations')
                ->label('Lokasi')
                ->relationship('locations', 'name', fn(Builder $query) => $query->orderBy('parent_id')->orderBy('name'))
                ->getOptionLabelFromRecordUsing(function (Location $location) {
                    if (is_null($location->parent_id)) {
                        return $location->name;
                    } else {
                        return $location->parentLocation->name  . ' - ' .  $location->name;
                    }
                })
                ->preload()
                ->multiple()
        ];

        return $table->query(Duty::query()->latest())
            ->heading('Senarai Tugas')
            ->columns([
                TextColumn::make('index')
                    ->label('#')
                    ->rowIndex(),
                TextColumn::make('name')
                    ->label('Tugas'),
                TextColumn::make('locations.name')
                    ->badge()->label('Lokasi')
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
