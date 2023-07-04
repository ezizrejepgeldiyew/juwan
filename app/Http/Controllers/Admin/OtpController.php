<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $otps = Otp::get();
        return view('Admin.Users.otps', compact('otps'));
    }

    public function resend()
    {
        $this->sendOtp();
        return back();
    }

    public static function sendOtp()
    {
        $user = Auth::user();
        $otp = rand(1000, 9999);
        Otp::create([
            'login' => $user->email,
            'otp' => $otp,
            'type' => 'windows'
        ]);
        $mail = new OtpMail($otp);
        Mail::to($user->email)->send($mail);
    }

    public function otps()
    {
        $user = Auth::user();
        $otp = Otp::where('login', $user->email)->latest()->first();
        if ($otp == null) $this->sendOtp();
        return view('Admin.otp');
    }

    public function verify(Request $request)
    {

        $otpTime = $this->otpTime();
        if ($otpTime < 0) return back()->with('error','Wagt gutardy taze OTP ugradyn!!!');
        $user = Auth::user();
        $otpNumber = (int)collect($request->number)->implode('');
        $otp = Otp::where('login', $user->email)->latest()->first();
        if ($otp->otp == $otpNumber) {
            $otp->status = true;
            $otp->save();
            return redirect()->route('index');
        }

        return back();
    }

    public function otpTime()
    {
        $otp = Otp::where('login', Auth::user()->email)->latest()->first();
        $time = (strtotime($otp->created_at) + 120)  - strtotime(now());
        return $time;
    }
}
