<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Otp;

class OtpController extends Controller
{
    public function index()
    {
        $otps = Otp::get();
        return view('Admin.Users.otps', compact('otps'));
    }
}
