<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LoanDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('loan_details')->insert([
            ['clientid' => 1001, 'num_of_payment' => 12, 'first_payment_date' => '2020-06-29', 'last_payment_date' => '2021-06-29', 'loan_amount' => 1550.00],
            ['clientid' => 1003, 'num_of_payment' => 7, 'first_payment_date' => '2020-02-15', 'last_payment_date' => '2020-08-15', 'loan_amount' => 6851.94],
            ['clientid' => 1005, 'num_of_payment' => 17, 'first_payment_date' => '2019-11-09', 'last_payment_date' => '2021-03-09', 'loan_amount' => 1800.01],
        ]);
    }
}
