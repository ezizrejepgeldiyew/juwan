<?php

namespace App\Services\OTP;

use App\Mail\OtpMail;
use App\Models\Otp;
use Illuminate\Support\Facades\Mail;

class Mailer{

    public function sendOtpMail($user){
        $otp = Otp::create([
            'otp'       => random_int(1111, 9999),
            'type'      => 'email',
            'status'    => false,
            'login'     => $user->email
        ]);
        Mail::to($user->email)->queue(new OtpMail($otp->otp));
        $otp->save();
        $user->last_otp_id = $otp->id;
        $user->save();
        return true;
    }

}
