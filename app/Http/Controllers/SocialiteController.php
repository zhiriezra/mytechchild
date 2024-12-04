<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if(!$user){
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    // 'google_id' => $googleUser->getId(),
                    'username' => strstr($googleUser->getEmail(), '@', true),
                    'role' => 'student',
                    'password' => bcrypt(uniqid()),
                ]);
            }

            Auth::login($user);
            $role = $user->role;
            return redirect()->route($role.'dashboard');

        } catch (\Exception $e){
            return redirect('/login')->withErrors(['error' => 'Unable to login with Google']);
        }
    }
}
