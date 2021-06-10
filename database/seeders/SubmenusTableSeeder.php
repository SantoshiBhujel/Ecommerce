<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubmenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('submenus')->delete();
        
        \DB::table('submenus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menus_id' => 1,
                'name' => 'Mobiles',
                'created_at' => '2020-11-06 02:57:40',
                'updated_at' => '2020-11-06 03:16:53',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menus_id' => 1,
                'name' => 'Tablets',
                'created_at' => '2020-11-06 02:58:45',
                'updated_at' => '2020-11-06 02:58:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menus_id' => 1,
                'name' => 'Laptops',
                'created_at' => '2020-11-06 02:58:59',
                'updated_at' => '2020-11-06 02:58:59',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menus_id' => 1,
                'name' => 'Desktops',
                'created_at' => '2020-11-06 02:59:06',
                'updated_at' => '2020-11-06 02:59:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menus_id' => 1,
                'name' => 'Gaming Console',
                'created_at' => '2020-11-06 02:59:22',
                'updated_at' => '2020-11-06 02:59:22',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menus_id' => 1,
                'name' => 'Cameras',
                'created_at' => '2020-11-06 02:59:36',
                'updated_at' => '2020-11-06 02:59:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menus_id' => 1,
                'name' => 'Printers',
                'created_at' => '2020-11-06 02:59:45',
                'updated_at' => '2020-11-06 02:59:45',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menus_id' => 2,
                'name' => 'Mobile Accessories',
                'created_at' => '2020-11-06 03:00:04',
                'updated_at' => '2020-11-06 03:00:04',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menus_id' => 2,
                'name' => 'Camera Accessories',
                'created_at' => '2020-11-06 03:00:25',
                'updated_at' => '2020-11-06 03:00:25',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menus_id' => 2,
                'name' => 'Audio',
                'created_at' => '2020-11-06 03:00:46',
                'updated_at' => '2020-11-06 03:00:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menus_id' => 2,
                'name' => 'Computer Accessories',
                'created_at' => '2020-11-06 03:01:17',
                'updated_at' => '2020-11-06 03:01:17',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menus_id' => 2,
                'name' => 'Storage',
                'created_at' => '2020-11-06 03:01:33',
                'updated_at' => '2020-11-06 03:01:33',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menus_id' => 2,
                'name' => 'Network Components',
                'created_at' => '2020-11-06 03:02:00',
                'updated_at' => '2020-11-06 03:02:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menus_id' => 3,
                'name' => 'TVs',
                'created_at' => '2020-11-06 03:02:26',
                'updated_at' => '2020-11-06 03:02:26',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menus_id' => 3,
                'name' => 'Audio & Video Devices',
                'created_at' => '2020-11-06 03:02:58',
                'updated_at' => '2020-11-06 03:02:58',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menus_id' => 3,
                'name' => 'Home Appliances',
                'created_at' => '2020-11-06 03:03:35',
                'updated_at' => '2020-11-06 03:03:35',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menus_id' => 4,
                'name' => 'Bath & Body',
                'created_at' => '2020-11-06 03:03:51',
                'updated_at' => '2020-11-06 03:03:51',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menus_id' => 4,
                'name' => 'Hair Care',
                'created_at' => '2020-11-06 03:04:13',
                'updated_at' => '2020-11-06 03:04:13',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'menus_id' => 4,
                'name' => 'Make Up',
                'created_at' => '2020-11-06 03:04:26',
                'updated_at' => '2020-11-06 03:04:26',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'menus_id' => 4,
                'name' => 'Perfumes',
                'created_at' => '2020-11-06 03:04:43',
                'updated_at' => '2020-11-06 03:04:43',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'menus_id' => 5,
                'name' => 'Diapers',
                'created_at' => '2020-11-06 03:04:55',
                'updated_at' => '2020-11-06 03:04:55',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'menus_id' => 5,
                'name' => 'Toys',
                'created_at' => '2020-11-06 03:05:23',
                'updated_at' => '2020-11-06 03:05:23',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'menus_id' => 6,
                'name' => 'Beverages',
                'created_at' => '2020-11-06 03:06:05',
                'updated_at' => '2020-11-06 03:06:05',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'menus_id' => 6,
                'name' => 'Food',
                'created_at' => '2020-11-06 03:06:28',
                'updated_at' => '2020-11-06 03:06:28',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'menus_id' => 7,
                'name' => 'Bath',
                'created_at' => '2020-11-06 03:06:40',
                'updated_at' => '2020-11-06 03:06:40',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'menus_id' => 7,
                'name' => 'Bedding',
                'created_at' => '2020-11-06 03:06:48',
                'updated_at' => '2020-11-06 03:06:48',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'menus_id' => 7,
                'name' => 'Furniture',
                'created_at' => '2020-11-06 03:06:58',
                'updated_at' => '2020-11-06 03:06:58',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'menus_id' => 7,
                'name' => 'Kitchen & Dinning',
                'created_at' => '2020-11-06 03:07:34',
                'updated_at' => '2020-11-06 03:07:34',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'menus_id' => 7,
                'name' => 'Laundry & Cleaning',
                'created_at' => '2020-11-06 03:08:01',
                'updated_at' => '2020-11-06 03:08:01',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Fashion',
                'created_at' => '2020-11-06 03:08:14',
                'updated_at' => '2020-11-11 04:47:10',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'menus_id' => 8,
                'name' => 'Men\'s Fashion',
                'created_at' => '2020-11-06 03:08:34',
                'updated_at' => '2020-11-11 04:47:52',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'menus_id' => 8,
                'name' => 'Kid\'s Fashion',
                'created_at' => '2020-11-06 03:08:52',
                'updated_at' => '2020-11-11 04:48:13',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'menus_id' => 10,
                'name' => 'Men\'s Watch',
                'created_at' => '2020-11-06 03:10:34',
                'updated_at' => '2020-11-11 04:49:39',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'menus_id' => 10,
                'name' => 'Women\'s Watch',
                'created_at' => '2020-11-06 03:10:43',
                'updated_at' => '2020-11-06 03:10:43',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'menus_id' => 10,
                'name' => 'Kid\'s Watch',
                'created_at' => '2020-11-06 03:11:02',
                'updated_at' => '2020-11-06 03:11:02',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'menus_id' => 10,
                'name' => 'Sunglasses',
                'created_at' => '2020-11-06 03:11:22',
                'updated_at' => '2020-11-06 03:11:22',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'menus_id' => 10,
                'name' => 'Women Fashion Jwellery',
                'created_at' => '2020-11-06 03:11:59',
                'updated_at' => '2020-11-06 03:11:59',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'menus_id' => 10,
                'name' => 'Men Fashion Jwellery',
                'created_at' => '2020-11-06 03:12:09',
                'updated_at' => '2020-11-06 03:12:09',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'menus_id' => 11,
                'name' => 'Exercise & Fitness',
                'created_at' => '2020-11-06 03:12:50',
                'updated_at' => '2020-11-06 03:12:50',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'menus_id' => 11,
                'name' => 'Travel & Luggage',
                'created_at' => '2020-11-06 03:13:08',
                'updated_at' => '2020-11-06 03:13:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}