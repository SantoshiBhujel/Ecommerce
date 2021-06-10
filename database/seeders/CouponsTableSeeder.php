<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coupons')->delete();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'ABC123',
                'type' => 'fixed',
                'value' => 3099,
                'percent_off' => NULL,
                'starts_from' => '2020-11-01',
                'expires_on' => '2020-11-09',
                'created_at' => '2020-07-22 07:19:31',
                'updated_at' => '2020-07-22 07:19:31',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'DEF456',
                'type' => 'percent',
                'value' => NULL,
                'percent_off' => 20,
                'starts_from' => '2020-10-01',
                'expires_on' => '2020-11-09',
                'created_at' => '2020-07-22 07:19:31',
                'updated_at' => '2020-07-22 07:19:31',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'GHI789',
                'type' => 'fixed',
                'value' => 1000,
                'percent_off' => NULL,
                'starts_from' => '2020-11-09',
                'expires_on' => '2020-11-30',
                'created_at' => '2020-11-09 16:18:54',
                'updated_at' => '2020-11-09 16:18:54',
            ),
        ));
        
        
    }
}