<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::create([
            'car_id' => 1,
            'user' => 'rahma12',
            'loan_date' => '2024-07-06',
            'return_date' => '2024-07-08',
            'total_cost' => '70000000',
            'status' => 'Borrowed',
        ]);
        Loan::create([
            'car_id' => 2,
            'user' => 'rere06',
            'loan_date' => '2024-07-07',
            'return_date' => '2024-07-09',
            'total_cost' => '200000000',
            'status' => 'Borrowed',
        ]);
        Loan::create([
            'car_id' => 3,
            'user' => 'desti04',
            'loan_date' => '2024-07-05',
            'return_date' => '2024-07-08',
            'total_cost' => '270000000',
            'status' => 'Borrowed',
        ]);
        Loan::create([
            'car_id' => 4,
            'user' => '88ranti',
            'loan_date' => '2023-06-04',
            'return_date' => '2023-07-05',
            'total_cost' => '50000000',
            'status' => 'Returned',
        ]);
        Loan::create([
            'car_id' => 5,
            'user' => 'dinda09',
            'loan_date' => '2023-03-23',
            'return_date' => '2023-03-25',
            'total_cost' => '60000000',
            'status' => 'Returned',
        ]);
        Loan::create([
            'car_id' => 6,
            'user' => 'mark',
            'loan_date' => '2022-11-06',
            'return_date' => '2022-11-07',
            'total_cost' => '55000000',
            'status' => 'Returned',
        ]);
    }
}

