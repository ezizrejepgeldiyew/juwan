<?php

namespace App\Http\Controllers\Admin\Users;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    protected $modelName = 'Spatie\Permission\Models\Permission';

    public function index()
    {
        $permissions = Permission::get();
        return view('Admin.Users.permissions', compact('permissions'));
    }

    public function store(Request $request)
    {
        CRUD::create($this->modelName,$request);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, $id)
    {
        CRUD::update($this->modelName,$request,$id);
        return redirect()->route('permissions.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function destroy($id)
    {
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }
}
