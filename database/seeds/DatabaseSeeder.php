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
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MedicineSeeder::class);
        factory(App\User::class, 6)->create();
        $this->call(AddressSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(MedicineTransactionSeeder::class);
        
    }
}
