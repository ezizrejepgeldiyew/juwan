<?php

namespace App\Services\OTP;

use App\Models\Otp;
use GuzzleHttp\Client;

class SMS
{
    public mixed $url;
    public $text;

    public function __construct()
    {
        $this->url = config('sms.url.base');
        $this->text = config('sms.url.params.text');
    }

    public function sendOtpSMS($user): bool
    {
        $otp = Otp::query()->create([
            'otp' => random_int(1111, 9999),
            'type' => 'phone',
            'status' => false,
            'login' => $user->phone
        ]);

        $client = new Client();

        $client->get(
            $this->url
                . '?to=+993' . $user->phone
                . '&text=' . $this->text . $otp->otp
        );
        $user->last_otp_id = $otp->id;
        $user->save();
        return true;
    }
}
