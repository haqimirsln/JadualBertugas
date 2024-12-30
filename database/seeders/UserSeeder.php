<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Danial',
            'Zara',
            'Akmal',
            'Amira',
            'Hakim',
            'Azlina',
            'Asyraf',
            'Nur',
            'Fahmi',
            'Aina',
            'Baruuu'
        ];

        collect($names)->each(function ($i) {
            $locations = Arr::random(range(1, 2), 1)[0];

            User::create([
                'name' => $i,
                'email' => $i . '@gmail.com',
                'password' => bcrypt('password'),
                'location_id' => $locations,
            ]);
        });
    }

}
