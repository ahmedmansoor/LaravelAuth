<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        $roles = array(
            // array('name' => 'Administrator',            'guard_name' => 'all permissions',          'desc' => 'All Permissions assigned to this role', 'slug' => 'admin'),
            // array('name' => 'Accounts Officer',         'guard_name' => 'all accounts',             'desc' => 'Who create all kinds of requests', 'slug' => 'accounts-officer'),
            // array('name' => 'Finance Executive',        'guard_name' => 'all finance',              'desc' => 'Who authorize all kinds of requests', 'slug' => 'finance-executive'),
            // array('name' => 'Budget secretariat',       'guard_name' => 'all budget',               'desc' => 'Who does all budget secretariat works', 'slug' => 'budget-secretariat'),

            array('name' => 'Administrator',            'guard_name' => 'web'),
            array('name' => 'Accounts Officer',         'guard_name' => 'web'),
            array('name' => 'Finance Executive',        'guard_name' => 'web'),
            array('name' => 'Budget secretariat',       'guard_name' => 'web'),
        );
        DB::table('roles')->insert($roles);
    }
}