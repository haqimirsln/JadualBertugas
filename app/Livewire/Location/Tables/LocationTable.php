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
use Filament\Tables\Actions\Action;

class LocationTable extends BaseDataTable
{

    public function getFormFields()
    {
        $name = TextInput::make('description')->label('Lokasi')->required();
        return [
            $name,
        ];
    }
    public function table(Table $table): Table
    {
        return $table->query($this->getQuery())
            ->heading('Senarai Lokasi')
            ->headerActions([
                CreateAction::make()
                    ->label('Tambah Lokasi')
                    ->icon('heroicon-s-plus')
                    ->modalHeading('Maklumat Lokasi')
                    ->modalDescription('Tambah Maklumat Lokasi')
                    ->model(Location::class)
                    // ->slideOver()
                    ->modalWidth('xl')
                    ->color('info')
                    ->createAnother(false)
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batalkan')
                    ->form($this->getFormFields())
            ])
            ->columns([
                TextColumn::make('description')->label('Lokasi')
            ])->actions([
                EditAction::make()
                    ->icon(false)
                    ->modalHeading('Maklumat Lokasi')
                    ->modalDescription('Kemaskini Maklumat Lokasi')
                    ->button()
                    ->label('Kemaskini')
                    // ->slideOver()
                    ->modalWidth('xl')
                    ->color('info')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batalkan')
                    ->form($this->getFormFields()),
                DeleteAction::make()
                    ->icon(false)
                    ->button()
                    ->color('danger')
                    ->modalWidth('xl')
                    ->label('Padam')
                    ->requiresConfirmation()
                    ->action(fn(Location $record) => $record->delete())
            ])
        ;
    }
    public function getQuery()
    {
        return Location::query()->latest();
    }
}
