<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_photos')->delete();
        
        \DB::table('product_photos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'product_image' => '1.0-1604888417.jpg',
                'created_at' => '2020-11-09 02:20:17',
                'updated_at' => '2020-11-09 02:20:17',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'product_image' => '1.1-1604888417.jpg',
                'created_at' => '2020-11-09 02:20:17',
                'updated_at' => '2020-11-09 02:20:17',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'product_image' => '2.0-1604888451.jpeg',
                'created_at' => '2020-11-09 02:20:17',
                'updated_at' => '2020-11-09 02:20:17',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'product_image' => '2.1-1604888451.jpg',
                'created_at' => '2020-11-09 02:20:17',
                'updated_at' => '2020-11-09 02:20:17',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 3,
                'product_image' => '3.0-1605083628.jpg',
                'created_at' => '2020-11-11 08:33:48',
                'updated_at' => '2020-11-11 08:33:48',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'product_image' => '3.1-1605083628.jpg',
                'created_at' => '2020-11-11 08:33:48',
                'updated_at' => '2020-11-11 08:33:48',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 21,
                'product_image' => '21.0-1606361386.jpg',
                'created_at' => '2020-11-12 08:33:48',
                'updated_at' => '2020-11-11 08:33:48',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 21,
                'product_image' => '21.1-1606361386.jpg',
                'created_at' => '2020-11-11 08:33:48',
                'updated_at' => '2020-11-11 08:33:48',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 22,
                'product_image' => '22.0-1606366935.png',
                'created_at' => '2020-11-20 13:49:29',
                'updated_at' => '2020-11-20 13:49:29',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 22,
                'product_image' => '22.1-1606366935.jpeg',
                'created_at' => '2020-11-20 13:49:29',
                'updated_at' => '2020-11-20 13:49:29',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 23,
                'product_image' => '23.0-1606657769.jpg',
                'created_at' => '2020-11-29 13:49:29',
                'updated_at' => '2020-11-29 13:49:29',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 23,
                'product_image' => '23.1-1606657769.jpeg',
                'created_at' => '2020-11-29 13:49:29',
                'updated_at' => '2020-11-29 13:49:29',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 24,
                'product_image' => '24.0-1606740828.jpg',
                'created_at' => '2020-11-30 12:53:48',
                'updated_at' => '2020-11-30 12:53:48',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 24,
                'product_image' => '24.1-1606740828.jpg',
                'created_at' => '2020-11-30 12:53:48',
                'updated_at' => '2020-11-30 12:53:48',
            ),
        ));
        
        
    }
}