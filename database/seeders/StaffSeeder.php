<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Izzat Haqimi',
            'Niyaz',
            'Izzuddin',
            'Amsyar',
        ];

        $locations = Location::pluck('id');


        foreach ($names as $name) {
            $creates[] = [
                'name' => $name,
                'location_id' => $locations->random()
            ];
        }

        Staff::insert($creates);
    }
}
