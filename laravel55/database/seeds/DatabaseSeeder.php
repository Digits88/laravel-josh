<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_schedule')->insert([
            'Srial_no' => '03',
            'Due_DateofPayment' => '03 March 2018',
            'Installment_Amount' => '180,000',
            'Paid' => '180,000',
            'Balance' => 'Nill',
            'Date_of_Payment' => '29 March 2018',
            'Remarks' => '',
        ]);
    }
}
