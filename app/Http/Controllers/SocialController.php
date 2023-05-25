<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function googleCallback(){
        $userGoogle = Socialite::driver('google')->user();
        $provider = 'google';
        $user = User::where('provider', $provider)->where('provider_id', $userGoogle->getId() )->first();
        if(!$user){
            $user = new User();
            $user->name = $userGoogle->getName();
            $user->email = $userGoogle->getEmail();
            $user->provider_id = $userGoogle->getId();
            $user->provider = 'google';
            $user->avatar = $userGoogle->getAvatar();
            $user->password = Hash::make($userGoogle->getId());
            $user->save();
        }

        Auth::loginUsingId($user->id);
        return redirect('/');
    }
    public function faceBookCallback(){
        $userGoogle = Socialite::driver('facebook')->user();
        $provider = 'facebook';
        $user = User::where('provider', $provider)->where('provider_id', $userGoogle->getId() )->first();
        if(!$user){
            $user = new User();
            $user->name = $userGoogle->getName();
            $user->email = $userGoogle->getEmail();
            $user->provider_id = $userGoogle->getId();
            $user->provider = 'facebook';
            $user->avatar = $userGoogle->getAvatar();
            $user->password = Hash::make($userGoogle->getId());
            $user->save();
        }

        Auth::loginUsingId($user->id);
        return redirect('/');
    }
}
