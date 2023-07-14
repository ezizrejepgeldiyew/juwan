<?php

namespace App\Http\Controllers\API\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Models\Otp;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $otp = Otp::where('otp', $request->login)->first();
        $user = User::where('last_otp_id', $otp->id)->first();
        if ($user) {
            $time = strtotime($otp->created_at) + 120  - strtotime(now());
            if ($time < 0) return ErrorResource::make([
                'error_code' => 404,
                'message' => 'Wagt gutardy kody tazeden alyn!!!'
            ]);
            $token = $user->createToken('juwan-token')->plainTextToken;
            $data['token'] = $token;
            $data['success'] = true;
            $data['user'] = $user;
            return response()->json(compact('data'), 200);
        } else {
            return ErrorResource::make([
                'error_code' => 404,
                'message' => "In sonky kody ugradyn!!!"
            ]);
        }
    }
}
