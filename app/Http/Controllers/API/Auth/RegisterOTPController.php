<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\User;
use App\Services\OTP\Mailer;
use App\Services\OTP\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterOTPController extends Controller
{
    public function registerOTP(Request $request)
    {
        if ($request->phone) {
            $validator = Validator::make($request->all(), [
                'phone' => 'unique:users,phone',
                'password' => 'confirmed',
            ]);
            if ($validator->fails()) {
                return ErrorResource::make([
                    'error_code' => 404,
                    'message' => $validator->errors('phone')->first()
                ]);
            }
            $user = User::create($request->all())->assignRole('user');
            $sms_service = new SMS();
            $response = $sms_service->sendOtpSMS($user);

            if ($response) {
                return SuccessResource::make([
                    'success_code' => 200,
                    'message' => 'Kod iberildi!'
                ]);
            }
        } elseif ($request->email) {
            $validator = Validator::make($request->all(), [
                'email' => 'unique:users,email',
                'password' => 'confirmed',
            ]);
            if ($validator->fails()) {
                return ErrorResource::make([
                    'error_code' => 404,
                    'message' => $validator->errors('email')->first()
                ]);
            }
            $user = User::create($request->all())->assignRole('user');
            $mailer = new Mailer;
            $response = $mailer->sendOtpMail($user);

            if ($response) {
                return SuccessResource::make([
                    'success_code' => 200,
                    'message' => 'Kod iberildi!'
                ]);
            }
        }
    }
}
