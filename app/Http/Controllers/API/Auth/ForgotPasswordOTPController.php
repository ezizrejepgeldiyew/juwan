<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\SuccessResource;
use App\Models\User;
use App\Services\OTP\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordOTPController extends Controller
{
    public function forgotPasswordOTP(Request $request)
    {
        if ($request->phone) {
            $user = User::where('phone', $request->phone)->first();
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $user->update($data);
            $sms_service = new SMS();
            $response = $sms_service->sendOtpSMS($user);

            if ($response) {
                return SuccessResource::make([
                    'success_code' => 200,
                    'message' => 'Kod iberildi!'
                ]);
            }
        }
    }
}
