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
        // 1
        DB::table('transactions')->insert(
            ['date' => '2022-05-30 12:32:00',
            'total' => 48500,
            'user_id' => 2,
            'address_id' => 1
        ]);

        // 2
        DB::table('transactions')->insert(
            ['date' => '2022-05-31 14:22:00',
            'total' => 81000,
            'user_id' => 2,
            'address_id' => 2
        ]);

        // 3
        DB::table('transactions')->insert(
            ['date' => '2022-06-01 07:44:00',
            'total' => 63300,
            'user_id' => 2,
            'address_id' => 1
        ]);

        // 4
        DB::table('transactions')->insert(
            ['date' => '2022-06-03 16:59:00',
            'total' => 68500,
            'user_id' => 3,
            'address_id' => 3
        ]);

        // 5
        DB::table('transactions')->insert(
            ['date' => '2022-06-03 19:10:00',
            'total' => 139450,
            'user_id' => 3,
            'address_id' => 4
        ]);

//total blm diubah
        // 6
        DB::table('transactions')->insert(
            ['date' => '2022-06-04 07:10:00',
            'total' => 148400,
            'user_id' => 3,
            'address_id' => 4
        ]);

        // 7
        DB::table('transactions')->insert(
            ['date' => '2022-06-04 08:12:00',
            'total' => 96700,
            'user_id' => 3,
            'address_id' => 5
        ]);

        // 8
        DB::table('transactions')->insert(
            ['date' => '2022-06-05 09:47:00',
            'total' => 156200,
            'user_id' => 4,
            'address_id' => 6
        ]);

        // 9
        DB::table('transactions')->insert(
            ['date' => '2022-06-06 12:38:00',
            'total' => 28000,
            'user_id' => 4,
            'address_id' => 6
        ]);

        // 10
        DB::table('transactions')->insert(
            ['date' => '2022-06-06 17:42:00',
            'total' => 100000,
            'user_id' => 4,
            'address_id' => 6
        ]);
    }
}
