<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSliderImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_slider_images')->delete();
        
        \DB::table('menu_slider_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menus_id' => 1,
                'slider_image' => '1slider.0-1607504039.jpg',
                'created_at' => '2020-12-09 08:53:59',
                'updated_at' => '2020-12-09 08:53:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menus_id' => 1,
                'slider_image' => '1slider.1-1607504039.jpg',
                'created_at' => '2020-12-09 08:53:59',
                'updated_at' => '2020-12-09 08:53:59',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menus_id' => 3,
                'slider_image' => '3slider.0-1607504398.jpg',
                'created_at' => '2020-12-09 08:59:58',
                'updated_at' => '2020-12-09 08:59:58',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menus_id' => 3,
                'slider_image' => '3slider.1-1607504398.jpg',
                'created_at' => '2020-12-09 08:59:58',
                'updated_at' => '2020-12-09 08:59:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menus_id' => 8,
                'slider_image' => '8slider.0-1607506048.jpg',
                'created_at' => '2020-12-09 09:27:28',
                'updated_at' => '2020-12-09 09:27:28',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menus_id' => 8,
                'slider_image' => '8slider.1-1607506048.jpg',
                'created_at' => '2020-12-09 09:27:28',
                'updated_at' => '2020-12-09 09:27:28',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}