<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
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
        if ($request->phone) {
            $validator = Validator::make($request->all(), [
                'phone' => 'unique:users,phone',
            ]);
            if ($validator->fails()) {
                return ErrorResource::make([
                    'error_code' => 404,
                    'message' => $validator->errors('phone')->first()
                ]);
            }
        } elseif ($request->email) {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:users,email',
            ]);
            if ($validator->fails()) {
                return ErrorResource::make([
                    'error_code' => 404,
                    'message' => $validator->errors('email')->first()
                ]);
            }
        }
        $input = $request->all();
        $input['password'] = 'juwan';
        $user = User::create($input)->assignRole('user');
        $token =  $user->createToken('juwan-token')->plainTextToken;
        $data['token'] = $token;
        $data['success'] = true;
        $data['user'] = $user;
        return response()->json(compact('data'), 200);
    }
}
