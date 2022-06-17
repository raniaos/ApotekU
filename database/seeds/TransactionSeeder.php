<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(
            ['date' => '2022-06-15 12:32:00',
            'total' => '48500',
            'user_id' => '1',
            'address_id' => 2
        ]);

        DB::table('transactions')->insert(
            ['date' => '2022-06-13 14:22:00',
            'total' => '71000',
            'user_id' => '2',
            'address_id' => 3
        ]);

        DB::table('transactions')->insert(
            ['date' => '2022-05-25 07:44:00',
            'total' => '63300',
            'user_id' => '2',
            'address_id' => 3
        ]);

        DB::table('transactions')->insert(
            ['date' => '2022-06-05 16:59:00',
            'total' => '68500',
            'user_id' => '1',
            'address_id' => 1
        ]);

        DB::table('transactions')->insert(
            ['date' => '2022-05-30 19:10:00',
            'total' => '139450',
            'user_id' => '3',
            'address_id' => 4
        ]);
    }
}
