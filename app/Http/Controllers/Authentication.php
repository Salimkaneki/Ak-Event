<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authentication extends Controller
{
    //
    public function register(Request $request)
    {
        //
        //     $request->validate([
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|string|email|max:255|unique:users',
        //         'password' => 'required|string|min:8|confirmed',
        //     ]);
    
        //     $user = User::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => Hash::make($request->password),
        //     ]);
    
        //     return response()->json(['user' => $user], 201);
        // }
    
        // public function login(Request $request)
        // {
        //     $request->validate([
        //         'email' => 'required|string|email',
        //         'password' => 'required|string',
        //     ]);
    
        //     $user = User::where('email', $request->email)->first();
    
        //     if (! $user || ! Hash::check($request->password, $user->password)) {
        //         throw ValidationException::withMessages([
        //             'email' => ['The provided credentials are incorrect.'],
        //         ]);
        //     }
    
        //     return response()->json([
        //         'token' => $user->createToken('authToken')->accessToken,
        //     ]);
         }
    
}
