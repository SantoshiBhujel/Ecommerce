<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductAttributeUpdatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_attribute_updates')->delete();
        
        \DB::table('product_attribute_updates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_attribute_id' => 5,
                'added_quantity' => '2',
                'created_at' => '2020-12-28 12:08:04',
                'updated_at' => '2020-12-28 12:08:04',
            ),
        ));
        
        
    }
}