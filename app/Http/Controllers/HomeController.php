<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // Permission::create(['name' => 'edit post']);

        $role = Role::findById(1);
        // $permissions = Permission::all();
        $permission = Permission::first();

        // $role->givePermissionTo($permission);
        // $permissions->assignRole($role);

        // $role->syncPermissions($permissions);
        // $role->revokePermissionTo($permission);
        $permission->removeRole($role);

        return view('home');
    }
}
