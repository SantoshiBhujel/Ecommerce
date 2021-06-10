<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => 'banner-1606532660.jpg',
                'type' => 'top',
                'created_at' => '2020-11-28 03:04:20',
                'updated_at' => '2020-11-28 03:07:56',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'image' => 'banner-1606532674.jpg',
                'type' => 'top',
                'created_at' => '2020-11-28 03:04:34',
                'updated_at' => '2020-11-28 03:04:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'image' => 'banner-1606532692.jpg',
                'type' => 'top',
                'created_at' => '2020-11-28 03:04:52',
                'updated_at' => '2020-11-28 03:04:52',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'image' => 'banner-1606532963.jpg',
                'type' => 'side',
                'created_at' => '2020-11-28 03:09:23',
                'updated_at' => '2020-11-28 03:09:23',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'image' => 'banner-1606532986.jpg',
                'type' => 'side',
                'created_at' => '2020-11-28 03:09:46',
                'updated_at' => '2020-11-28 03:09:46',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'image' => 'banner-1606533079.jpg',
                'type' => 'bottom',
                'created_at' => '2020-11-28 03:11:19',
                'updated_at' => '2020-11-28 03:11:19',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'image' => 'banner-1606533093.jpg',
                'type' => 'bottom',
                'created_at' => '2020-11-28 03:11:33',
                'updated_at' => '2020-11-28 03:11:33',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}