<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginWithOTPController extends Controller
{
    public function login()
    {
        return view('auth.otplogin');
    }
    public function generate(Request $request)
    {
        $request->validate([
            'phonenumber' => 'required|exists:users,phonenumber',
        ]);
        $userOTP = $this->generateOTP($request->phonenumber);

        $userOTP->sendSMS($request->phonenumber);

        return redirect()->route('otp.verification', $userOTP->user_id)->with('success', 'OTP has been successfully sent to your mobile number');
    }
    public function generateOTP($phonenumber)
    {
        $user = User::where('phonenumber',$phonenumber)->first();
        $userOTP = UserOtp::where('user_id',$user->id)->latest()->first();

        $now = now();
        /**
         * There are OTP availbale in database which are not expire
         * at this condition
         */
        if($userOTP && $now->isBefore($userOTP->expire_at))
        {
            return $userOTP;
        }
        /**
         * Create the new OTP
         * Which expire in 10 min
         */
        $otp = rand(123456,999999);
        $otpCreate = UserOtp::create([
            'user_id' => $user->id,
            'otp' => $otp,
            'expire_at' => $now->addMinutes(10),
        ]);
        return $otpCreate;
    }
    public function verification($userId)
    {
        return view('auth.otp-verification',compact('userId'));
    }

    public function loginWithOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);
        $userOTP = UserOtp::where('user_id',$request->user_id)->where('otp',$request->otp)->first();
        $now = now();
        if(!$userOTP){
            return redirect()->back()->with('error','Your OTP is not correct.');
        }else if($userOTP && $now->isAfter($userOTP->expire_at)){
            return redirect()->route('otp.login')->with('error','Your OTP has been expired');
        }
        $user = User::whereId($request->user_id)->first();
        if($user)
        {
            $userOTP->update([
                'expire_at' => now(),
            ]);
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('otp.login')->with('error','Please try again.');
    }
}
