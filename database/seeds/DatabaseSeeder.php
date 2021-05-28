<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'contact_number' => '+639218362697',
            'contact_number1' => '+639669681402',
            'bank_name' => 'Bank of Philippines Island (BPI)',
            'bank_branch' => '0342 Sta. Cruz, Laguna',
            'bank_act_num' => '003423-22482-37',
            'swift_code_num' => 'BOPI PHMM',
            'email_ad' => 'margaret7317@gmail.com',
            'address' => 'NHA Southville 7, Site 2, Brgy. Dayap, Calauan, Laguna'
        ]);
    }
}
