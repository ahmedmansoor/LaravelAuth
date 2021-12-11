<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'writer']);

        // $permission = Permission::create(['name' => 'role-delete']);


        // $role = Role::findById(1);
        // // // // $permission = Permission::findById(1);

        // $role->givePermissionTo($permission);

        // $permission

        // auth()->user()->givePermissionTo('write post');

        // auth()->user()->assignRole('writer');

        // return auth()->user()->getAllPermissions();

        // return User::role('writer')->get();
        // return User::permission('write post')->get();

        return view('home');
    }
}