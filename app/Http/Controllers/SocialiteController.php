<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function HandleGithubCallBack(Request $request)
    {
        $user = Socialite::driver('github')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('admin.dashboard');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function HandleGoogleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('admin.dashboard');
    }
    
    public function redirectToFaceBook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function HandleFaceBookCallBack()
    {
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user);
        return redirect()->route('admin.dashboard');
    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email','=',$data->email)->first();
        if(!$user){
            $user = User::create([
                'name' => $data->name,
                'email' => $data->email,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        }
        Auth::login($user);
    }
}
