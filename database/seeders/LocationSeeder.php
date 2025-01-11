<?php

namespace Database\Seeders;

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
            'Pejabat Atas',
            'Pejabat Bawah',
        ];

        $creates = [];

        foreach ($locations as $location) {
            $creates[] = [
                'name' => $location
            ];
        }

        Location::insert($creates);
    }
}
