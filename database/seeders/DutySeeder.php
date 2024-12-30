<?php

namespace Database\Seeders;

use App\Models\Duty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $atasDuties = [
            'Section A',
            'Section B',
            'Cermin + Partition',
            'Meja Meeting',
            'Sampah',
            'Toilet',
            'Surau',
            'Tangga',
            'Filter',
            'Mop Section A',
            'Mop Section B'
        ];

        foreach ($atasDuties as $duty) {
            Duty::create([
                'description' => $duty,
            ]);
        }
    }
}
