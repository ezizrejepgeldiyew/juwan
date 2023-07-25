<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\User;
use App\Services\OTP\SMS;
use Illuminate\Http\Request;
use App\Services\OTP\Mailer;
use Illuminate\Support\Facades\Auth;

class LoginOTPController extends Controller
{
    public function loginOTP(Request $request)
    {
        if ($request->phone) {
            $user = User::where('phone', $request->phone)->first();
            if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
                $sms_service = new SMS();
                $response = $sms_service->sendOtpSMS($user);

                if ($response) {
                    return SuccessResource::make([
                        'success_code' => 200,
                        'message' => 'Kod iberildi!'
                    ]);
                }
            } else return ErrorResource::make([
                'error_code' => 401,
                'message' => 'Telefon belgi yada acar sozi nadogry!!!'
            ]);
        } else {
            $user = User::where('email', $request->email)->first();
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                $mailer = new Mailer;
                $response = $mailer->sendOtpMail($user);

                if ($response) {
                    return SuccessResource::make([
                        'success_code' => 200,
                        'message' => 'Kod iberildi!'
                    ]);
                }
            } else return ErrorResource::make([
                'error_code' => 401,
                'message' => 'Email yada acar sozi nadogry!!!'
            ]);
        }

        return ErrorResource::make([
            'error_code' => 404,
            'message' => 'Girizilen telefon belgili ýa-da elektron poçtaly ulanyjy tapylmady'
        ]);
    }
}
