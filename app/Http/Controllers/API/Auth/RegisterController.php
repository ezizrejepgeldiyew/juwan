<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Http\Resources\API\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'unique:users,phone',
        ]);
        if ($validator->fails()) {
            return ErrorResource::make([
                'error_code' => '',
                'message' => $validator->errors('phone')->first()
            ]);
        }
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input)->assignRole('user');
        $user['user'] = $user;
        $user['token'] =  $user->createToken('juwan-token')->plainTextToken;
        return response(UserResource::make($user),200);
    }
}
