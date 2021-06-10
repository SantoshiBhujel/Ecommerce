<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Samsung',
                'description' => '<p>World&#39;s most Popular Brand since 1938&nbsp;delivering mobiles, refrigerators, TVs at the most affordable price, Price nobody can beat</p>',
                'logo' => 'logo-1606314531.png',
                'created_at' => '2020-11-25 14:28:51',
                'updated_at' => '2020-11-26 10:38:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Apple',
                'description' => 'wow',
                'logo' => 'logo-1606316179.png',
                'created_at' => '2020-11-25 14:55:19',
                'updated_at' => '2020-11-25 14:56:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Redmi',
                'description' => 'wow',
                'logo' => 'logo-1606316274.png',
                'created_at' => '2020-11-25 14:57:54',
                'updated_at' => '2020-11-25 14:57:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Oppo',
                'description' => 'wow',
                'logo' => 'logo-1606316316.png',
                'created_at' => '2020-11-25 14:58:36',
                'updated_at' => '2020-11-25 14:58:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'CG',
                'description' => 'wow',
                'logo' => 'logo-1606316352.png',
                'created_at' => '2020-11-25 14:59:12',
                'updated_at' => '2020-11-25 14:59:12',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'LG',
                'description' => 'wow',
                'logo' => 'logo-1606316402.png',
                'created_at' => '2020-11-25 15:00:02',
                'updated_at' => '2020-11-25 15:00:02',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Baltra',
                'description' => 'wow',
                'logo' => 'logo-1606316462.jpg',
                'created_at' => '2020-11-25 15:01:02',
                'updated_at' => '2020-11-25 15:01:02',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'ElectroMax',
                'description' => 'wow',
                'logo' => 'logo-1606316640.jpg',
                'created_at' => '2020-11-25 15:04:00',
                'updated_at' => '2020-11-25 15:04:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Gucci',
                'description' => 'wow',
                'logo' => 'logo-1606316770.png',
                'created_at' => '2020-11-25 15:06:10',
                'updated_at' => '2020-11-25 15:06:10',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Calvin Klein',
                'description' => 'wow',
                'logo' => 'logo-1606316829.png',
                'created_at' => '2020-11-25 15:07:09',
                'updated_at' => '2020-11-25 15:07:09',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Versace',
                'description' => 'wow',
                'logo' => 'logo-1606317070.png',
                'created_at' => '2020-11-25 15:09:19',
                'updated_at' => '2020-11-25 15:11:10',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Louis Vuitton',
                'description' => 'wow',
                'logo' => 'logo-1606317151.png',
                'created_at' => '2020-11-25 15:12:31',
                'updated_at' => '2020-11-25 15:12:31',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Chanel',
                'description' => 'wow',
                'logo' => 'logo-1606317244.png',
                'created_at' => '2020-11-25 15:14:04',
                'updated_at' => '2020-11-25 15:14:04',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'ARMANI',
                'description' => 'wow',
                'logo' => 'logo-1606317306.png',
                'created_at' => '2020-11-25 15:15:06',
                'updated_at' => '2020-11-25 15:15:06',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'PRADA',
                'description' => 'wow',
                'logo' => 'logo-1606318498.jpg',
                'created_at' => '2020-11-25 15:34:58',
                'updated_at' => '2020-11-25 15:34:58',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'DOLCE & GABBANA',
                'description' => 'wow',
                'logo' => 'logo-1606318611.png',
                'created_at' => '2020-11-25 15:36:51',
                'updated_at' => '2020-11-25 15:36:51',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'DIOR',
                'description' => 'wow',
                'logo' => 'logo-1606318731.png',
                'created_at' => '2020-11-25 15:38:51',
                'updated_at' => '2020-11-25 15:38:51',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}