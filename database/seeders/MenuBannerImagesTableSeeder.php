<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuBannerImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_banner_images')->delete();
        
        \DB::table('menu_banner_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menus_id' => 1,
                'banner_image' => '1.0-1605099554.jpg',
                'created_at' => '2020-11-11 12:59:14',
                'updated_at' => '2020-11-11 12:59:14',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menus_id' => 1,
                'banner_image' => '1.1-1605099554.jpg',
                'created_at' => '2020-11-11 12:59:14',
                'updated_at' => '2020-11-11 12:59:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menus_id' => 3,
                'banner_image' => '3.0-1605099756.jpg',
                'created_at' => '2020-11-11 13:02:36',
                'updated_at' => '2020-11-11 13:02:36',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menus_id' => 3,
                'banner_image' => '3.1-1605099756.jpg',
                'created_at' => '2020-11-11 13:02:36',
                'updated_at' => '2020-11-11 13:02:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menus_id' => 8,
                'banner_image' => '8.0-1605099772.jpg',
                'created_at' => '2020-11-11 13:02:52',
                'updated_at' => '2020-11-11 13:02:52',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menus_id' => 8,
                'banner_image' => '8.1-1605099772.jpg',
                'created_at' => '2020-11-11 13:02:52',
                'updated_at' => '2020-11-11 13:02:52',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menus_id' => 10,
                'banner_image' => '10.0-1605099851.jpg',
                'created_at' => '2020-11-11 13:04:11',
                'updated_at' => '2020-11-11 13:04:11',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menus_id' => 10,
                'banner_image' => '10.1-1605099851.jpg',
                'created_at' => '2020-11-11 13:04:11',
                'updated_at' => '2020-11-11 13:04:11',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menus_id' => 11,
                'banner_image' => '11.0-1605099871.jpg',
                'created_at' => '2020-11-11 13:04:31',
                'updated_at' => '2020-11-11 13:04:31',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menus_id' => 11,
                'banner_image' => '11.1-1605099871.jpg',
                'created_at' => '2020-11-11 13:04:31',
                'updated_at' => '2020-11-11 13:04:31',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menus_id' => 12,
                'banner_image' => '12.0-1605099887.jpg',
                'created_at' => '2020-11-11 13:04:47',
                'updated_at' => '2020-11-11 13:04:47',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menus_id' => 12,
                'banner_image' => '12.1-1605099887.jpg',
                'created_at' => '2020-11-11 13:04:47',
                'updated_at' => '2020-11-11 13:04:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}