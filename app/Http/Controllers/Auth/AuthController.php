<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return response()->json([
                'message' => 'Sai thông tin',
            ],401);
        }
        $user = Auth::user();
        $user->tokens()->delete();
    }
}
