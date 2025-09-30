<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Signup page
    public function showSignup()
    {
        $countries = Country::with(['provinces', 'cities', 'subLocalities'])->get();
        return view('components.auth.signup', compact('countries'));
    }

    // Signup request
    public function register(Request $request)
    {
        // dd($request->all());
        try {
            $validated = $request->validate([
                'name'          => 'required|string|max:100',
                'email'         => 'required|email|unique:users,email',
                'password'      => 'required|string|min:8',
                'phone_no'      => 'required|string|max:20',
                'gender'        => 'required|string|in:male,female,other',
                'dob'           => 'required|date',
                'country_id'       => 'required|string|max:100',
                'province_id'   => 'required|integer',
                'city_id'       => 'required|integer',
                'sub_locality_id'=> 'required|integer',
            ]);

            // User create
            $user = User::create([
                'name'           => $validated['name'],
                'slug'           => Str::slug($validated['name']),
                'email'          => $validated['email'],
                'password'       => Hash::make($validated['password']),
                'phone_no'       => $validated['phone_no'],
                'gender'         => $validated['gender'],
                'dob'            => $validated['dob'],
                'country_id'     => $validated['country_id'],
                'province_id'    => $validated['province_id'],
                'city_id'        => $validated['city_id'],
                'sub_locality_id'=> $validated['sub_locality_id'],
                'role'           => 'user',
            ]);

            // Auto login
            Auth::login($user);

            return redirect()->route('home')->with('success', 'Signup successful!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->withErrors(['error' => 'An error occurred during registration. Please try again.']);
        }
    }

    // Login form
    public function showLogin()
    {
        return view('components.auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|string',
        ]);

        $remember = $request->filled('remember');
        
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Logged in successfully!');
        }   

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login');
    }
}