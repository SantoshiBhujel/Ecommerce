<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'users_id' => 1,
                'name' => 'Iphone 11',
                'brand_id' => 2,
                'menus_id' => 1,
                'submenus_id' => 1,
                'category_id' => 2,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 10,
                'buying_price' => '110000',
                'selling_price' => '118000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'fixed',
                'sale_value' => '2000',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'iphone,mac,apple',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1604888417.jpg',
                'views' => 49,
                'sold' => 50,
                'created_at' => '2020-11-09 02:20:17',
                'updated_at' => '2020-12-03 09:00:46',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'users_id' => 1,
                'name' => 'Pantene Shampoo',
                'brand_id' => 18,
                'menus_id' => 4,
                'submenus_id' => 18,
                'category_id' => 17,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 20,
                'buying_price' => '500',
                'selling_price' => '540',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'shampoo,conditioner,pantene',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1604888451.jpg',
                'views' => 33,
                'sold' => 34,
                'created_at' => '2020-11-09 02:20:51',
                'updated_at' => '2020-11-09 02:20:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'users_id' => 1,
                'name' => 'Redmi Note 9 Pro',
                'brand_id' => 3,
                'menus_id' => 1,
                'submenus_id' => 1,
                'category_id' => 24,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 20,
                'buying_price' => '23000',
                'selling_price' => '26999',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'mobile,redmi,mi,pro',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605083628.png',
                'views' => 25,
                'sold' => 3,
                'created_at' => '2020-11-11 08:33:48',
                'updated_at' => '2020-11-13 07:38:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'users_id' => 1,
                'name' => 'Nano Washing Machine',
                'brand_id' => 1,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 26,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 20,
                'buying_price' => '80000',
                'selling_price' => '85000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'washing machine',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605148142.jpg',
                'views' => 78,
                'sold' => 4,
                'created_at' => '2020-11-12 02:29:02',
                'updated_at' => '2020-11-27 15:51:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'users_id' => 1,
                'name' => 'Electronic Cleansing Machine',
                'brand_id' => 8,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 28,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '25000',
                'selling_price' => '30000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'vacuum,cleaner,cleansing machine,handhold',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605148348.jpg',
                'views' => 34,
                'sold' => 6,
                'created_at' => '2020-11-12 02:32:28',
                'updated_at' => '2020-11-12 02:32:28',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'users_id' => 1,
                'name' => 'Handhold Cleaning Machine',
                'brand_id' => 7,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 28,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 8,
                'buying_price' => '18000',
                'selling_price' => '21000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'vacuum,cleaner,cleansing machine,handhold',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605148401.jpg',
                'views' => 24,
                'sold' => 45,
                'created_at' => '2020-11-12 02:33:21',
                'updated_at' => '2020-11-26 12:27:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'users_id' => 1,
                'name' => 'Dark Blue Coast',
                'brand_id' => 13,
                'menus_id' => 8,
                'submenus_id' => 31,
                'category_id' => 31,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '1000',
                'selling_price' => '2000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'coast,blue,cardigan',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605148719.jpg',
                'views' => 66,
                'sold' => 33,
                'created_at' => '2020-11-12 02:38:39',
                'updated_at' => '2020-11-30 13:19:51',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'users_id' => 1,
                'name' => 'Silver Drop Camera',
                'brand_id' => NULL,
                'menus_id' => 1,
                'submenus_id' => 6,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 10,
                'buying_price' => '15000',
                'selling_price' => '17500',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'camera,cam,webcam',
                'tax_included' => '0',
                'tax' => '13',
                'display_image' => 'product-1605148806.jpg',
                'views' => 89,
                'sold' => 56,
                'created_at' => '2020-11-12 02:40:06',
                'updated_at' => '2020-12-02 07:08:50',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'users_id' => 1,
                'name' => 'Multi-Directions Camera',
                'brand_id' => NULL,
                'menus_id' => 1,
                'submenus_id' => 6,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 3,
                'buying_price' => '32000',
                'selling_price' => '35000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'percent',
                'sale_value' => '7',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'camera,cam,webcam,multidirection,360',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149074.jpg',
                'views' => 57,
                'sold' => 65,
                'created_at' => '2020-11-12 02:44:34',
                'updated_at' => '2020-11-27 15:51:56',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'users_id' => 1,
                'name' => 'Ag On Board Camera',
                'brand_id' => NULL,
                'menus_id' => 1,
                'submenus_id' => 6,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 3,
                'buying_price' => '29000',
                'selling_price' => '34000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'camera,cam,webcam,onboard',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149133.jpg',
                'views' => 96,
                'sold' => 66,
                'created_at' => '2020-11-12 02:45:33',
                'updated_at' => '2020-12-03 05:23:46',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'users_id' => 1,
                'name' => 'iZon White Silver Camera',
                'brand_id' => NULL,
                'menus_id' => 1,
                'submenus_id' => 6,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 2,
                'buying_price' => '40000',
                'selling_price' => '45000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'camera,cam,webcam',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149183.jpg',
                'views' => 33,
                'sold' => 32,
                'created_at' => '2020-11-12 02:46:23',
                'updated_at' => '2020-11-12 02:46:23',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'users_id' => 1,
                'name' => 'Microwave 2 layers',
                'brand_id' => 5,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 29,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '40000',
                'selling_price' => '48000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'percent',
                'sale_value' => '12',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'micrwave,oven,two layers',
                'tax_included' => '0',
                'tax' => '13',
                'display_image' => 'product-1605149297.jpg',
                'views' => 105,
                'sold' => 87,
                'created_at' => '2020-11-12 02:48:17',
                'updated_at' => '2020-12-03 09:06:54',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'users_id' => 1,
                'name' => 'Self Dough Maker',
                'brand_id' => 6,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 30,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 13,
                'buying_price' => '5000',
                'selling_price' => '8000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'dough,maker',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149431.jpg',
                'views' => 44,
                'sold' => 78,
                'created_at' => '2020-11-12 02:50:31',
                'updated_at' => '2020-12-03 06:37:31',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'users_id' => 1,
                'name' => 'Vacuum',
                'brand_id' => 7,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 28,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '19000',
                'selling_price' => '25000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'fixed',
                'sale_value' => '1550',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'vacuum,cleaner',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149475.jpg',
                'views' => 83,
                'sold' => 90,
                'created_at' => '2020-11-12 02:51:15',
                'updated_at' => '2020-12-04 11:03:21',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'users_id' => 1,
                'name' => 'Nano Internet Smart TV 32"',
                'brand_id' => 1,
                'menus_id' => 3,
                'submenus_id' => 14,
                'category_id' => 12,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '30000',
                'selling_price' => '38000',
                'duration' => 10,
                'duration_type' => 'year',
                'warranty_type' => 'warranty',
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'internet,smart,LED,TV',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149570.jpg',
                'views' => 25,
                'sold' => 33,
                'created_at' => '2020-11-12 02:52:50',
                'updated_at' => '2020-11-26 12:34:19',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'users_id' => 1,
                'name' => 'Super Thin Internet TV',
                'brand_id' => 5,
                'menus_id' => 3,
                'submenus_id' => 14,
                'category_id' => 11,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 10,
                'buying_price' => '32000',
                'selling_price' => '37000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'internet,smart,LED,TV',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149608.jpg',
                'views' => 32,
                'sold' => 45,
                'created_at' => '2020-11-12 02:53:28',
                'updated_at' => '2020-11-12 02:53:28',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'users_id' => 1,
                'name' => 'Samsung Led TV',
                'brand_id' => 1,
                'menus_id' => 3,
                'submenus_id' => 14,
                'category_id' => 11,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '33000',
                'selling_price' => '39000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'fixed',
                'sale_value' => '4500',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'Samsung, LED, TV',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149663.jpg',
                'views' => 43,
                'sold' => 66,
                'created_at' => '2020-11-12 02:54:23',
                'updated_at' => '2020-11-12 02:54:23',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'users_id' => 1,
                'name' => 'Black Electric Teapot',
                'brand_id' => 8,
                'menus_id' => 3,
                'submenus_id' => 16,
                'category_id' => 27,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 10,
                'buying_price' => '2300',
                'selling_price' => '3500',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'pot, electric pot, pot, kettle',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149914.jpg',
                'views' => 70,
                'sold' => 76,
                'created_at' => '2020-11-12 02:58:34',
                'updated_at' => '2020-12-03 09:05:07',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'users_id' => 1,
                'name' => 'Luxury Sleeping Light',
                'brand_id' => NULL,
                'menus_id' => 7,
                'submenus_id' => 26,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '1800',
                'selling_price' => '2500',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'light, lamp',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605149962.jpg',
                'views' => 43,
                'sold' => 59,
                'created_at' => '2020-11-12 02:59:22',
                'updated_at' => '2020-11-12 02:59:22',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'users_id' => 1,
                'name' => 'Pogy Pretty Iron Chair',
                'brand_id' => NULL,
                'menus_id' => 7,
                'submenus_id' => 26,
                'category_id' => NULL,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 3,
                'buying_price' => '8000',
                'selling_price' => '12000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'iron chair',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1605150010.jpg',
                'views' => 93,
                'sold' => 12,
                'created_at' => '2020-11-12 03:00:10',
                'updated_at' => '2020-11-27 15:28:51',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'users_id' => 1,
                'name' => 'Louis Vuitton Bag',
                'brand_id' => 12,
                'menus_id' => 8,
                'submenus_id' => 30,
                'category_id' => 34,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 10,
                'buying_price' => '20000',
                'selling_price' => '35000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'LV, Louis Vuitton, bag',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1606361386.jpeg',
                'views' => 1,
                'sold' => 0,
                'created_at' => '2020-11-26 03:29:46',
                'updated_at' => '2020-11-29 05:25:56',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'users_id' => 1,
                'name' => 'Ophidia GG Small Bag',
                'brand_id' => 9,
                'menus_id' => 8,
                'submenus_id' => 30,
                'category_id' => 34,
                'description' => '<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

<p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

<p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>

<p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>',
                'features' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>',
                'quantity' => 5,
                'buying_price' => '140000',
                'selling_price' => '180000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'percent',
                'sale_value' => '25',
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'Gucci, shoulder bag, bag',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1606366934.jpg',
                'views' => 4,
                'sold' => 0,
                'created_at' => '2020-11-26 05:02:14',
                'updated_at' => '2020-12-03 05:03:13',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'users_id' => 1,
                'name' => 'Converse Shoe',
                'brand_id' => 18,
                'menus_id' => 8,
                'submenus_id' => 31,
                'category_id' => 31,
                'description' => '<p>high quality</p>',
                'features' => '<p>Double sole, qualtiy material</p>',
                'quantity' => 10,
                'buying_price' => '800',
                'selling_price' => '2000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 0,
                'sale_type' => NULL,
                'sale_value' => NULL,
                'free_shipping' => 0,
                'featured' => 0,
                'model_no' => NULL,
                'tags' => 'shoe, converse',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1606657769.jpg',
                'views' => 0,
                'sold' => 0,
                'created_at' => '2020-11-29 13:49:29',
                'updated_at' => '2020-11-29 13:49:29',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'users_id' => 1,
                'name' => 'Ladies track sets',
                'brand_id' => 13,
                'menus_id' => 8,
                'submenus_id' => 30,
                'category_id' => 34,
                'description' => '<p>Ladies track sets available</p>

<p>size- M \\ L \\ XL Chest 40-42-44</p>

<p>Price Rs. 2̵0̵0̵0̵ 1499/-</p>

<p>Free Delivery inside valley</p>',
                'features' => '<p>Nice quality</p>',
                'quantity' => 4,
                'buying_price' => '1200',
                'selling_price' => '2000',
                'duration' => NULL,
                'duration_type' => NULL,
                'warranty_type' => NULL,
                'sale' => 1,
                'sale_type' => 'fixed',
                'sale_value' => '501',
                'free_shipping' => 0,
                'featured' => 1,
                'model_no' => NULL,
                'tags' => 'track,joggers',
                'tax_included' => '1',
                'tax' => '0',
                'display_image' => 'product-1606740828.jpg',
                'views' => 10,
                'sold' => 0,
                'created_at' => '2020-11-30 12:53:48',
                'updated_at' => '2020-12-05 15:35:16',
                'deleted_at' => NULL,
            ),
            
        ));
        
        
    }
}