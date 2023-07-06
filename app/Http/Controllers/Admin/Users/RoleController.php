<?php

namespace App\Http\Controllers\Admin\Users;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    protected $modelName = 'Spatie\Permission\Models\Role';

    public function index()
    {
        $roles = Role::withCount('users')->get();
        $permissions = Permission::get();
        return view('Admin.Users.roles', compact('roles', 'permissions'));
    }

    public function store(Request $request, Role $role)
    {
        CRUD::create($this->modelName, $request);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, Role $role)
    {
        $role->revokePermissionTo($request->permissions);
        $role->givePermissionTo($request->permissions);

        CRUD::update($this->modelName, $request, $role->id);
        return redirect()->route('roles.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function givePermission(Request $request, Role $role)
    {
        $role->givePermissionTo($request->permissions);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('success', 'Maglumat üstünlikli pozuldy');
        }
    }
}
