<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => ' Avanza',
            'description' => 'Toyota Avanza tetap bukan termasuk dalam kategori mobil LCGC melainkan mobil MPV yang memiliki beberapa fitur dan karakteristik menarik.'
        ]);
        Type::create([
            'name' => ' Pajero',
            'description' => 'Mobil Pajero adalah mobil yang awalnya diproduksi oleh Mitsubishi sebagai mobil off road pada ajang Rally Dakar.'
        ]);
        Type::create([
            'name' => ' BMW',
            'description' => 'Mobil BMW  adalah singkatan dari Bayerische Motoren Werke, Perusahaan yang dikenal mobil sport mewah ini didirikan pertama kali pada tahun 1916 oleh Franz Josef Popp'
        ]);
        Type::create([
            'name' => ' Daihatsu',
            'description' => 'Mobil Daihatsu adalah sebuah produsen mobil asal Jepang dan merupakan salah satu produsen mesin pembakaran dalam tertua di Jepang yang masih eksis hingga saat ini.'
        ]);
        Type::create([
            'name' => ' Sedan',
            'description' => 'Mobil Sedan  adalah jenis mobil yang paling umum dan cukup populer karena desainnya yang elegan, nyaman, dan memiliki ruang kabin cukup luas.'
        ]);
        Type::create([
            'name' => ' SUV',
            'description' => 'Mobil SUV  sendiri merupakan singkatan dari Sport Utility Vehicl, atau utilitas sport didesain menjadi mobil yang tangguh untuk melewati berbagai medan jalan yang tidak halus, seperti melewati jalanan berbatu hingga jalan yang terjal.'
        ]);
    }

}
