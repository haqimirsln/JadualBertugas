<?php

namespace App\Livewire\Pengguna\Tables;

use App\Livewire\BaseDataTable;
use App\Models\User;

use App\Models\Location;
use Livewire\Component;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Radio;
use Filament\Tables\Table;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\EditAction;

class PenggunaTables extends BaseDataTable
{

    public function getQuery()
    {
        return User::query()->latest();
    }
    public function getLocation()
    {
        return Location::all();
    }
    public function getFormFields()
    {
        $name = TextInput::make('name')->label('Nama')->required();
        $email = TextInput::make('email')->label('Email')->required();

        $officePosition = Radio::make('location_id')
            ->label('Posisi Pejabat')
            ->helperText('Staff tersebut berada di posisi pejabat atas atau bawah?')
            ->required()
            ->options($this->getLocation()->pluck('description', 'id')->toArray());
        return [
            $name,
            $email,
            $officePosition,
        ];
    }
    public function table(Table $table): Table
    {
        // dd('masuk sini');
        return $table
            ->heading('Senarai Pengguna')
            ->query($this->getQuery())
            ->columns([
                TextColumn::make('name')->label('Nama')->sortable(),
                TextColumn::make('email')->label('Email')->sortable(),
                TextColumn::make('location.description')->label('Lokasi')->sortable()->badge(),
            ])->actions([
                ViewAction::make()
                    ->icon(false)
                    ->modalHeading('Maklumat Tugas')
                    ->modalDescription('Lihat Maklumat Tugas')
                    ->button()
                    // ->slideOver()
                    ->modalWidth('xl')
                    ->color('gray')
                    ->label('Lihat')
                    ->modalCloseButton('Simpan')
                    ->form($this->getFormFields()),
                EditAction::make()
                    ->icon(false)
                    ->modalHeading('Maklumat Staff')
                    ->modalDescription('Kemaskini Maklumat Staff')
                    ->button()
                    ->label('Kemaskini')
                    // ->slideOver()
                    ->modalWidth('xl')
                    ->color('info')
                    ->modalSubmitActionLabel('Simpan')
                    ->modalCancelActionLabel('Batalkan')
                    ->form($this->getFormFields())
            ]);
    }
}
