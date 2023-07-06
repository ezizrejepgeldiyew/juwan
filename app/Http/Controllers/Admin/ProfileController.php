<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    protected $modelName = 'App\Models\User';

    public function index()
    {
        return view('Admin.profile');
    }

    public function updateAccountInfo(Request $request, $id)
    {
        CRUD::update($this->modelName, $request,$id);
        return redirect()->route('profile.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->with("error", "Öňki açar sözüňiz nädogry!");
        }

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("success", "Açar sözi üstünlikli üýtgedildi!");
    }
}
