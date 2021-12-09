<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();

        $permissions = [
            //Access Control - Roles
            ['name' => 'All Permissions',                      'guard_name' => 'admin'],   //0
            ['name' => 'Create Roles',                         'guard_name' => 'Create Roles'],   //1
            ['name' => 'View Roles',                           'guard_name' => 'View Roles'],   //2
            ['name' => 'Delete Roles',                         'guard_name' => 'Delete Roles'],   //3
            ['name' => 'Set Permissions',                      'guard_name' => 'Set Permissions'],   //4

            //Access Control - Users
            ['name' => 'Create User',                          'guard_name' => 'Create User'],   //5
            ['name' => 'View User',                            'guard_name' => 'View User'],   //6
            ['name' => 'Edit User',                            'guard_name' => 'Edit User'],   //7
            ['name' => 'Delete User',                          'guard_name' => 'Delete User'],   //8
            ['name' => 'Reset Password',                       'guard_name' => 'Reset Password'],   //9
            ['name' => 'Assign Roles',                         'guard_name' => 'Assign Roles'],   //10

            //Access Control - Products
            ['name' => 'Create Products',                      'guard_name' => 'Create Products'],   //11
            ['name' => 'View Products',                        'guard_name' => 'View Products'],   //12
            ['name' => 'Delete Products',                      'guard_name' => 'Delete Products'],   //13
        ];

        DB::table('permissions')->insert($permissions);
    }
}



    // ['name' => 'Create Roles',                         'guard_name' => 'Create Roles',                               'slug' => 'create.role'],   //1
    //         ['name' => 'View Roles',                           'guard_name' => 'View Roles',                                 'slug' => 'view.role'],   //2
    //         ['name' => 'Delete Roles',                         'guard_name' => 'Delete Roles',                               'slug' => 'delete.role'],   //3
    //         ['name' => 'Set Permissions',                      'guard_name' => 'Set Permissions',                            'slug' => 'set.permissions'],   //4

    //         //Access Control - Users
    //         ['name' => 'Create User',                          'guard_name' => 'Create User',                               'slug' => 'create.user',],   //5
    //         ['name' => 'View User',                            'guard_name' => 'View User',                                 'slug' => 'view.user',],   //6
    //         ['name' => 'Edit User',                            'guard_name' => 'Edit User',                                 'slug' => 'edit.user',],   //7
    //         ['name' => 'Delete User',                          'guard_name' => 'Delete User',                               'slug' => 'delete.user',],   //8
    //         ['name' => 'Reset Password',                       'guard_name' => 'Reset Password',                            'slug' => 'reset.password',],   //9
    //         ['name' => 'Assign Roles',                         'guard_name' => 'Assign Roles',                              'slug' => 'assign.roles',],   //10

    //         //Access Control - Products
    //         ['name' => 'Create Products',                      'guard_name' => 'Create Products',                               'slug' => 'create.product'],   //11
    //         ['name' => 'View Products',                        'guard_name' => 'View Products',                                 'slug' => 'view.product'],   //12
    //         ['name' => 'Delete Products',                      'guard_name' => 'Delete Products',                               'slug' => 'delete.product'],   //13