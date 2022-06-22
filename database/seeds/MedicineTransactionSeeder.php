<?php

use Illuminate\Database\Seeder;

class MedicineTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 1,
            'transaction_id' => 1,
            'quantity' => 2,
            'price' => 10000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 4,
            'transaction_id' => 1,
            'quantity' => 3,
            'price' => 9500
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 2,
            'transaction_id' => 2,
            'quantity' => 3,
            'price' => 12000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 20,
            'transaction_id' => 2,
            'quantity' => 1,
            'price' => 10000
        ]);
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 16,
            'transaction_id' => 2,
            'quantity' => 1,
            'price' => 35000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 12,
            'transaction_id' => 3,
            'quantity' => 4,
            'price' => 12250
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 22,
            'transaction_id' => 3,
            'quantity' => 1,
            'price' => 14300
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 19,
            'transaction_id' => 4,
            'quantity' => 5,
            'price' => 7000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 9,
            'transaction_id' => 4,
            'quantity' => 1,
            'price' => 17500
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 23,
            'transaction_id' => 4,
            'quantity' => 2,
            'price' => 8000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 37,
            'transaction_id' => 5,
            'quantity' => 1,
            'price' => 42000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 24,
            'transaction_id' => 5,
            'quantity' => 4,
            'price' => 13300
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 4,
            'transaction_id' => 5,
            'quantity' => 2,
            'price' => 9500
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 14,
            'transaction_id' => 5,
            'quantity' => 1,
            'price' => 25250
        ]);

        //6
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 44,
            'transaction_id' => 6,
            'quantity' => 2,
            'price' => 74200
        ]);

        //7
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 48,
            'transaction_id' => 7,
            'quantity' => 1,
            'price' => 83400
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 24,
            'transaction_id' => 7,
            'quantity' => 1,
            'price' => 13300
        ]);

        //8
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 4,
            'transaction_id' => 8,
            'quantity' => 3,
            'price' => 9500
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 2,
            'transaction_id' => 8,
            'quantity' => 2,
            'price' => 12000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 14,
            'transaction_id' => 8,
            'quantity' => 2,
            'price' => 25250
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 24,
            'transaction_id' => 8,
            'quantity' => 4,
            'price' => 13300
        ]);

        //9
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 19,
            'transaction_id' => 9,
            'quantity' => 4,
            'price' => 7000
        ]);
        
        //10
        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 23,
            'transaction_id' => 10,
            'quantity' => 10,
            'price' => 8000
        ]);

        DB::table('medicine_transaction')->insert(
            ['medicine_id' => 1,
            'transaction_id' => 10,
            'quantity' => 2,
            'price' => 10000
        ]);
    }
}
