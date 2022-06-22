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
             'user_id' => 2
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Office',
             'address' => 'Ruko Merr lt 2 A',
             'districts' => 'Sukolilo',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '63112',
             'user_id' => 2
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Royal Residence KK3/23',
             'districts' => 'Bubutan',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60119',
             'user_id' => 3
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

        DB::table('addresses')->insert(
            ['name' => 'Second home',
             'address' => 'Griya Babatan Mukti C12/3',
             'districts' => 'Wiyung',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60244',
             'user_id' => 3
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'SDPS KM7/21',
             'districts' => 'Darmo',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60127',
             'user_id' => 4
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Dian Istana JJ8/13',
             'districts' => 'Graha Famili',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60184',
             'user_id' => 5
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Office',
             'address' => 'Ruko Citraland AA2/32',
             'districts' => 'Sambikerep',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60571',
             'user_id' => 5
            ]
        );

        DB::table('addresses')->insert(
            ['name' => 'Home',
             'address' => 'Graha Famili FF5/4',
             'districts' => 'Graha Famili',
             'city' => 'Surabaya',
             'province' => 'Jawa Timur',
             'postal_code' => '60984',
             'user_id' => 6
            ]
        );
    }
}
