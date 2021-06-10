<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(SubmenusTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductPhotosTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(MenuBannerImagesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenuSliderImagesTableSeeder::class);
        $this->call(ProductAttributeUpdatesTableSeeder::class);
    }
}
