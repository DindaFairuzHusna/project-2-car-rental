<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'name' => 'Avanza',
            'photo' => 'toyota.jpg',
            'type_id' => 1,
            'cost_per_day' => '35000000',
            'year' => '2024',
            'license_plate' => 'B 357 IAP'
        ]);
        Car::create([
            'name' => 'Pajero',
            'photo' => 'pajero.jpg',
            'type_id' => 2,
            'cost_per_day' => '100000000',
            'year' => '2024',
            'license_plate' => 'Y 373 EOL'
        ]);
        Car::create([
            'name' => 'BMW',
            'photo' => 'bmw.jpg',
            'type_id' => 3,
            'cost_per_day' => '90000000',
            'year' => '2024',
            'license_plate' => 'A 235 DXA'
        ]);
        Car::create([
            'name' => 'Daihatsu',
            'photo' => 'daihatsu.jpg',
            'type_id' => 4,
            'cost_per_day' => '50000000',
            'year' => '2023',
            'license_plate' => 'D 654 DEZ'
        ]);
        Car::create([
            'name' => 'Sedan',
            'photo' => 'sedan.jpg',
            'type_id' => 5,
            'cost_per_day' => '30000000',
            'year' => '2023',
            'license_plate' => 'N 887 JOO'
        ]);
        Car::create([
            'name' => 'SUV',
            'photo' => 'SUV.jpg',
            'type_id' => 6,
            'cost_per_day' => '55000000',
            'year' => '2022',
            'license_plate' => 'Y 908 MRK'
        ]);
    }
}
