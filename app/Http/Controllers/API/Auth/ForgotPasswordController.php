<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $otp = Otp::where('otp', $request->forgot)->first();
        $user = User::where('last_otp_id', $otp->id)->first();
        if ($user) {
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
