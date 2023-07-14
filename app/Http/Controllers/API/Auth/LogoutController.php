<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\SuccessResource;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        $user = User::find($request->user()->id);

        $user->tokens()->delete();
        $user->save();
        return SuccessResource::make([
            'success_code' => 200,
            'message' => 'User logged out'
        ]);
    }
}
