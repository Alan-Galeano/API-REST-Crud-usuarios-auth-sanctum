<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = [
            "user" => $request->input('user'),
            "password" => $request->input('password'),
        ];
        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('auth-token')->plainTextToken;
            return (new UserResource($user))->additional([
                "status" => 200,
                "success" => true,
                "message" => 'Usuario logeado con éxito!',
                "token" => $token
            ]);
        } else {
            return response()->json([
                "status" => 404,
                "success" => false,
                "message" => 'Usuario o contraseña no valida!'
            ]);
        }
    }

    public function logout(){
        Auth::user()->tokens()->delete();
        return response()->json([
            "status" => 200,
            "success" => true,
            "message" => 'Usuario deslogeado'
        ]);
    }
}
