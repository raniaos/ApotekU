<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Villa Taman Gapura Blok GG4/2',
             'districts' => 'Sambikerep',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60218',
             'user_id' => 1
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Office',
             'address' => 'Ruko Merr lt 2 A',
             'districts' => 'Sukolilo',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '63112',
             'user_id' => 1
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Royal Residence KK3/23',
             'districts' => 'Bubutan',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60119',
             'user_id' => 2
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Royal Palace Q2/32',
             'districts' => 'Bubutan',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60119',
             'user_id' => 3
            ]
        );
    }
}
