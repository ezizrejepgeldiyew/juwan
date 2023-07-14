<?php

namespace App\Http\Middleware;

use App\Models\Otp as ModelsOtp;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OTP
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $otp = ModelsOtp::where('login',Auth::user()->email)->latest()->first();
        // if (!$otp->status) {
        //     return redirect('/otps');
        // }
        return $next($request);
    }
}
