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
            'Pejabat Atas' => [
                'Section A',
                'Section B'
            ],
            'Pejabat Bawah' => [
                'Section A',
                'Section B'
            ]
        ];

        foreach ($locations as $parent => $childLocations) {

            $parentLocation = Location::create([
                'name' => $parent
            ]);

            $creates = [];
            foreach ($childLocations as $childLocation) {
                $creates[] = [
                    'name' => $childLocation
                ];
            }

            $parentLocation->childLocations()->createMany($creates);
        }
    }
}
