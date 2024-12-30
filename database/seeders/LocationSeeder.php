<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            'Atas',
            'Bawah',
        ];

        collect($locations)->each(function ($i) {
            Location::create([
                'description' => $i,
            ]);
        });
    }
}
