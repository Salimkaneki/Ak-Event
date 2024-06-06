<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;


class AuthenticationController extends Controller
{
    //
    public function register(RegisterRequest $request) {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->phonenumber = $request->phonenumber;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Création d'un token pour l'utilisateur
        $token = $user->createToken('auth_token')->plainTextToken;

        // Réponse JSON avec les détails de l'utilisateur et le token
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ], 201);
    }

}
