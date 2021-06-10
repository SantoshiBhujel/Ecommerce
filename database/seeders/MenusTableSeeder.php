<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Digital',
                'icon' => 'icon.1605001776.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605108868.jpg',
                'created_at' => '2020-11-05 17:10:33',
                'updated_at' => '2020-11-11 15:34:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Electronic Accessories',
                'icon' => 'icon.1605001318.png',
                'show_on_navbar' => 0,
                'featured_image' => 'featured.1605109007.jpg',
                'created_at' => '2020-11-06 02:54:05',
                'updated_at' => '2020-11-11 15:36:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Electronics',
                'icon' => 'icon.1605000865.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605108934.jpg',
                'created_at' => '2020-11-06 02:54:19',
                'updated_at' => '2020-11-11 15:35:34',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Health & Beauty',
                'icon' => 'icon.1605001960.png',
                'show_on_navbar' => 0,
                'featured_image' => NULL,
                'created_at' => '2020-11-06 02:54:41',
                'updated_at' => '2020-11-10 09:52:40',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Babies & Toys',
                'icon' => 'icon.1605002935.png',
                'show_on_navbar' => 0,
                'featured_image' => NULL,
                'created_at' => '2020-11-06 02:55:00',
                'updated_at' => '2020-11-10 10:08:55',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Groceries & Pets',
                'icon' => 'icon.1605003256.png',
                'show_on_navbar' => 0,
                'featured_image' => NULL,
                'created_at' => '2020-11-06 02:55:14',
                'updated_at' => '2020-11-10 10:14:16',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Home & Lifestyle',
                'icon' => 'icon.1605003422.png',
                'show_on_navbar' => 0,
                'featured_image' => NULL,
                'created_at' => '2020-11-06 02:55:32',
                'updated_at' => '2020-11-10 10:17:02',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Fashion',
                'icon' => 'icon.1605003592.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605108954.jpg',
                'created_at' => '2020-11-06 02:55:44',
                'updated_at' => '2020-11-11 15:35:54',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Men\'s Fashion',
                'icon' => 'icon.1605003834.png',
                'show_on_navbar' => 0,
                'featured_image' => NULL,
                'created_at' => '2020-11-06 02:55:52',
                'updated_at' => '2020-11-11 04:45:11',
                'deleted_at' => '2020-11-11 04:45:11',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Watch & Accessories',
                'icon' => 'icon.1605003437.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605108991.jpg',
                'created_at' => '2020-11-06 02:56:12',
                'updated_at' => '2020-11-11 15:36:31',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Sports',
                'icon' => 'icon.1605003451.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605108678.jpg',
                'created_at' => '2020-11-06 02:56:24',
                'updated_at' => '2020-11-11 15:31:18',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Furniture',
                'icon' => 'icon.1605070596.png',
                'show_on_navbar' => 1,
                'featured_image' => 'featured.1605109032.jpg',
                'created_at' => '2020-11-11 04:53:56',
                'updated_at' => '2020-11-11 15:37:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}