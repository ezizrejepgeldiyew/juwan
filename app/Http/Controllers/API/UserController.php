<?php

namespace App\Http\Controllers\API;

use App\Actions\UploadPhoto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        $avatarName = UploadPhoto::update($request, 'Avatar', auth()->user()->avatar);
        auth()->user()->update([
            'avatar' => $avatarName,
            'name' => $request->name,
            'surname' => $request->surname,
        ]);
        return auth()->user();
    }
}
