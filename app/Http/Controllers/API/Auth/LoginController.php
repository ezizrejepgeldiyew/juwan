<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Http\Resources\API\UserResource;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

        if (Auth::attempt([
            'phone' => $request->phone,
            'password' => $request->password
        ])) {
            $authUser = Auth::user();
            $authUser['user'] = Auth::user();
            $authUser['token'] =  $authUser->createToken('juwan-token')->plainTextToken;
            return UserResource::make($authUser);
        } else {
            return ErrorResource::make([
                'error_code' => 401,
                'message' => 'Unauthorised'
            ]);
        }
    }
}
