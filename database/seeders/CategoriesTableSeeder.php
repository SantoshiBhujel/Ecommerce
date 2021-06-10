<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'submenu_id' => 1,
                'menus_id' => NULL,
                'name' => 'Samsung Mobile',
                'created_at' => '2020-11-06 06:51:41',
                'updated_at' => '2020-11-06 06:51:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'submenu_id' => 1,
                'menus_id' => NULL,
                'name' => 'Iphone',
                'created_at' => '2020-11-06 06:55:48',
                'updated_at' => '2020-11-06 06:55:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'submenu_id' => 2,
                'menus_id' => NULL,
                'name' => 'Samsung Tablet',
                'created_at' => '2020-11-06 06:56:06',
                'updated_at' => '2020-11-06 06:56:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'submenu_id' => 2,
                'menus_id' => NULL,
                'name' => 'Ipad',
                'created_at' => '2020-11-06 06:56:20',
                'updated_at' => '2020-11-06 06:56:20',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'submenu_id' => 3,
                'menus_id' => NULL,
                'name' => 'Notebooks & Ultrabooks',
                'created_at' => '2020-11-06 06:57:16',
                'updated_at' => '2020-11-06 06:57:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'submenu_id' => 3,
                'menus_id' => NULL,
                'name' => 'Macbook',
                'created_at' => '2020-11-06 06:57:27',
                'updated_at' => '2020-11-06 06:57:27',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'submenu_id' => 8,
                'menus_id' => NULL,
                'name' => 'Mobile Covers',
                'created_at' => '2020-11-06 06:59:09',
                'updated_at' => '2020-11-06 06:59:09',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'submenu_id' => 8,
                'menus_id' => NULL,
                'name' => 'Screen Protectors',
                'created_at' => '2020-11-06 06:59:30',
                'updated_at' => '2020-11-06 06:59:30',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'submenu_id' => 9,
                'menus_id' => NULL,
                'name' => 'Lenses',
                'created_at' => '2020-11-06 06:59:57',
                'updated_at' => '2020-11-06 06:59:57',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'submenu_id' => 9,
                'menus_id' => NULL,
                'name' => 'Tripod',
                'created_at' => '2020-11-06 07:00:08',
                'updated_at' => '2020-11-06 07:00:08',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'submenu_id' => 14,
                'menus_id' => NULL,
                'name' => 'LED TVs',
                'created_at' => '2020-11-06 07:00:36',
                'updated_at' => '2020-11-06 07:00:36',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'submenu_id' => 14,
                'menus_id' => NULL,
                'name' => 'Smart TVs',
                'created_at' => '2020-11-06 07:00:56',
                'updated_at' => '2020-11-06 07:00:56',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'submenu_id' => 15,
                'menus_id' => NULL,
                'name' => 'SoundBars',
                'created_at' => '2020-11-06 07:01:29',
                'updated_at' => '2020-11-06 07:01:29',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'submenu_id' => 15,
                'menus_id' => NULL,
                'name' => 'Projectors',
                'created_at' => '2020-11-06 07:01:42',
                'updated_at' => '2020-11-06 07:01:42',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'submenu_id' => 17,
                'menus_id' => NULL,
                'name' => 'Massage Oils',
                'created_at' => '2020-11-06 07:02:09',
                'updated_at' => '2020-11-06 07:02:09',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'submenu_id' => 17,
                'menus_id' => NULL,
                'name' => 'Body Soap',
                'created_at' => '2020-11-06 07:02:21',
                'updated_at' => '2020-11-06 07:02:21',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'submenu_id' => 18,
                'menus_id' => NULL,
                'name' => 'Shampoo',
                'created_at' => '2020-11-06 07:03:05',
                'updated_at' => '2020-11-06 07:03:05',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'submenu_id' => 18,
                'menus_id' => NULL,
                'name' => 'Treatment',
                'created_at' => '2020-11-06 07:03:16',
                'updated_at' => '2020-11-06 07:03:16',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'submenu_id' => 19,
                'menus_id' => NULL,
                'name' => 'Foundation',
                'created_at' => '2020-11-06 07:03:27',
                'updated_at' => '2020-11-06 07:03:27',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'submenu_id' => 19,
                'menus_id' => NULL,
                'name' => 'EyeShadow',
                'created_at' => '2020-11-06 07:04:54',
                'updated_at' => '2020-11-06 07:04:54',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'submenu_id' => 20,
                'menus_id' => NULL,
                'name' => 'Women\'s Perfume',
                'created_at' => '2020-11-06 07:05:17',
                'updated_at' => '2020-11-06 07:05:17',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'submenu_id' => 20,
                'menus_id' => NULL,
                'name' => 'Men\'s Perfume',
                'created_at' => '2020-11-06 07:05:29',
                'updated_at' => '2020-11-06 07:05:29',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'submenu_id' => 20,
                'menus_id' => NULL,
                'name' => 'Deodorant',
                'created_at' => '2020-11-06 07:05:57',
                'updated_at' => '2020-11-06 07:10:53',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'submenu_id' => 1,
                'menus_id' => 1,
                'name' => 'Redmi',
                'created_at' => '2020-11-11 08:32:15',
                'updated_at' => '2020-11-11 08:32:15',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Refrigerator',
                'created_at' => '2020-11-12 02:18:31',
                'updated_at' => '2020-11-12 02:18:31',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Washing Machine',
                'created_at' => '2020-11-12 02:18:45',
                'updated_at' => '2020-11-12 02:18:45',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Oven',
                'created_at' => '2020-11-12 02:18:55',
                'updated_at' => '2020-11-12 02:18:55',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Vacuum Cleaner',
                'created_at' => '2020-11-12 02:19:31',
                'updated_at' => '2020-11-12 02:19:31',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Microwave',
                'created_at' => '2020-11-12 02:20:55',
                'updated_at' => '2020-11-12 02:20:55',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'submenu_id' => 16,
                'menus_id' => 3,
                'name' => 'Dough Maker',
                'created_at' => '2020-11-12 02:25:24',
                'updated_at' => '2020-11-12 02:25:24',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'submenu_id' => 31,
                'menus_id' => 8,
                'name' => 'Men\'s Clothes',
                'created_at' => '2020-11-12 02:34:34',
                'updated_at' => '2020-11-12 02:34:34',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'submenu_id' => 31,
                'menus_id' => 8,
                'name' => 'Men\'s Shoes',
                'created_at' => '2020-11-12 02:34:49',
                'updated_at' => '2020-11-12 02:34:49',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'submenu_id' => 31,
                'menus_id' => 8,
                'name' => 'Men\'s Bag',
                'created_at' => '2020-11-12 02:35:19',
                'updated_at' => '2020-11-12 02:35:19',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Clothes',
                'created_at' => '2020-11-12 02:35:31',
                'updated_at' => '2020-11-12 08:12:44',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Bag',
                'created_at' => '2020-11-12 02:35:57',
                'updated_at' => '2020-11-12 02:35:57',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Lingeries',
                'created_at' => '2020-11-12 02:36:09',
                'updated_at' => '2020-11-12 02:36:09',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Shoes',
                'created_at' => '2020-11-12 02:36:33',
                'updated_at' => '2020-11-12 02:36:33',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'submenu_id' => 31,
                'menus_id' => 8,
                'name' => 'Men\'s Belt',
                'created_at' => '2020-11-12 02:37:00',
                'updated_at' => '2020-11-12 02:37:00',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Belt',
                'created_at' => '2020-11-12 02:37:16',
                'updated_at' => '2020-11-12 02:37:16',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'submenu_id' => 30,
                'menus_id' => 8,
                'name' => 'Women\'s Accessories',
                'created_at' => '2020-11-12 02:37:33',
                'updated_at' => '2020-11-12 02:37:33',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'submenu_id' => 32,
                'menus_id' => 8,
                'name' => 'Kid\'s Clothes',
                'created_at' => '2020-11-12 02:37:45',
                'updated_at' => '2020-11-12 02:37:45',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'submenu_id' => 32,
                'menus_id' => 8,
                'name' => 'Kid\'s Shoes',
                'created_at' => '2020-11-12 02:37:58',
                'updated_at' => '2020-11-12 02:37:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}