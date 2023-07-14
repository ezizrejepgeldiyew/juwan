<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\User;
use App\Services\OTP\SMS;
use Illuminate\Http\Request;
use App\Services\OTP\Mailer;

class RequestOTPController extends Controller
{
    public function requestOTP(Request $request)
    {
        if ($request->phone) {
            $user = User::where('phone', $request->phone)->first();
            $sms_service = new SMS();
            $response = $sms_service->sendOtpSMS($user);

            if ($response) {
                return SuccessResource::make([
                    'success_code' => 200,
                    'message' => 'Kod iberildi!'
                ]);
            }
            return ErrorResource::make([
                'error_code' => 500,
                'message' => 'Internedinizi barlan!'
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            $mailer = new Mailer;
            $response = $mailer->sendOtpMail($user);

            if ($response) {
                return SuccessResource::make([
                    'success_code' => 200,
                    'message' => 'Kod iberildi!'
                ]);
            }
            return ErrorResource::make([
                'error_code' => 500,
                'message' => 'Internedinizi barlan!'
            ]);
        }

        return ErrorResource::make([
            'error_code' => 404,
            'message' => 'Girizilen telefon belgili ýa-da elektron poçtaly ulanyjy tapylmady'
        ]);
    }
}
