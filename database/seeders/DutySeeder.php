<?php

namespace Database\Seeders;

use App\Models\Duty;
use Illuminate\Database\Seeder;

class DutySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $duties = [
            // 'Section A',
            // 'Section B',
            'Cermin + Partition',
            'Meja Meeting',
            'Sampah',
            'Toilet',
            'Surau',
            'Tangga',
            'Filter',
            'Mop',
            // 'Mop Section A',
            // 'Mop Section B'
        ];

        $creates = [];

        foreach ($duties as $duty) {
            $creates[] = [
                'name'  => $duty
            ];
        }

        Duty::insert($creates);
    }
}
