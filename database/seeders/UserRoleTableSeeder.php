<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleUser::create([
            'role_id' => '1',
            'user_id' => '1'
        ]);

        RoleUser::create([
            'role_id' => '1',
            'user_id' => '2'
        ]);

        RoleUser::create([
            'role_id' => '2',
            'user_id' => '3'
        ]);
    }
}