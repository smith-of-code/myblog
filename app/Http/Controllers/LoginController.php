<?php

namespace App\Http\Controllers;

use App\Adaptors\Adaptor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;

class LoginController extends Controller
{
    public function loginVK()
    {
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(Adaptor $userAdaptor)
    {

        if (Auth::check()){
            return redirect()->route('main');
        }
        $user = Socialite::driver('vkontakte')->user();
        $userInSystem = $userAdaptor->getUserBySocId($user, 'vk');
        Auth::Login($userInSystem);
        return redirect()->route('main');
    }


    public function loginFB()
    {
        return Socialite::with('facebook')->redirect();
    }

    public function responseFB(Adaptor $userAdaptor)
    {

        if (Auth::check()){
            return redirect()->route('main');
        }
        $user = Socialite::driver('facebook')->user();
        $userInSystem = $userAdaptor->getUserBySocId($user, 'fb');
        Auth::Login($userInSystem);
        return redirect()->route('main');
    }
}
