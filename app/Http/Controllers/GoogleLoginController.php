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
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
        $existingUser->google_id = $user->id;
        $existingUser->save();
        auth()->login($existingUser, true);
        }else{
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->password = bcrypt(request(Str::random()));
            $newUser->save();

            auth()->login($newUser,true);
        }

        return redirect()->intended('/home');
    }

    

}
