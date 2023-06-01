<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        $roles = Role::get();
        
        return view('Admin.Users.users', compact('users', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now()
        ]);
        $user->syncRoles($request->get('roles'));
        return redirect()->route('users.index')->with('success', 'Maglumat üstünlikli üýtgedildi');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }
}
