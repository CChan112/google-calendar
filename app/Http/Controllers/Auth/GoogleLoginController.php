<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle():RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback():RedirectResponse
    {
        $user = Socialite::driver('google')->user;
        $existingUser = User::where('google_id',$user->id)->first();
        if($existingUser){
            auth()->login($existingUser,true);
        }else{
            $newuser = new User();
            $newuser->name = $user->name;
            $newuser->email = $user->email;
            $newuser->google_id = $user->id;
            $newuser->password = bcrypt(request(Str::random()));
            $newuser->save();

            auth()->login($newUser,true);
        }

        return redirect()->intended('/home');
    }
}
