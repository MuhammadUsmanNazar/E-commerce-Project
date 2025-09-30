<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OauthProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthenticationController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Check if oauth_provider record exists
        $oauthProvider = OauthProvider::where('provider_name', 'google')
            ->where('provider_user_id', $googleUser->id)
            ->first();

        if ($oauthProvider) {
            // Directly get user from oauth_providers mapping
            $user = $oauthProvider->user;
        } else {
            // Check if email already exists
            $user = User::where('email', $googleUser->email)->first();

            $slug = Str::slug($googleUser->name);

            if (! $user) {
                // New user create (nullable fields allowed)
                $user = User::create([
                    'name'          => $googleUser->name,
                    'slug'          => $slug,
                    'email'         => $googleUser->email,
                    'avatar_url'    => $googleUser->avatar,
                    'email_verified_at' => now(),
                    'password'      => Hash::make(uniqid()), // random password
                    'role'          => 'user',
                ]);
            }

            // Create oauth_provider record
            OauthProvider::create([
                'user_id'           => $user->id,
                'provider_name'     => 'google',
                'provider_user_id'  => $googleUser->id,
                'access_token'      => $googleUser->token,
                'refresh_token'     => $googleUser->refreshToken ?? null,
                'token_expires_at'  => now()->addSeconds($googleUser->expiresIn ?? 3600),
            ]);
        }

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Logged in with Google!');
    }
}
