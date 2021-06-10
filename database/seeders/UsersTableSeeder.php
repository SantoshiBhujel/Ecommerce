<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => null,
                'password' => '$2y$10$uT88D8hL6Igyn3fuTgt/TeFqgbuwRW3HRthbZ1Bc/RThcjVnx88ae',
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'role' => 'admin',
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => '2020-11-05 17:09:53',
                'updated_at' => '2020-11-05 17:09:53',
            ),
        ));
    }
}
