<?php

namespace App\Livewire\Pengguna\Tables;

use App\Livewire\BaseDataTable;
use App\Models\User;
use Livewire\Component;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenggunaTables extends BaseDataTable
{

    public function getQuery()
    {
        return User::query()->latest();
    }
    public function table(Table $table): Table
    {
        // dd('masuk sini');
        return $table
            ->query($this->getQuery())
            ->columns([
                TextColumn::make('name')->label('Nama')->sortable(),
                TextColumn::make('email')->label('Email')->sortable(),
                TextColumn::make('pengguna.location')->label('Lokasi')->sortable(),

            ]);

    }
}
